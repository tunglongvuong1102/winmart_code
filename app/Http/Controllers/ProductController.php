<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Web3\Web3;
use Web3\Contract;
use Web3\Providers\HttpProvider;
use Web3\RequestManagers\HttpRequestManager;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Models\Product;
class ProductController extends Controller
{
    protected $web3;
    protected $contract;

    public function __construct()
    {
        $this->web3 = new Web3(new HttpProvider(new HttpRequestManager(config('web3.host'), 10)));
        $abi = json_decode(file_get_contents(base_path('blockchain/build/contracts/ProductRegistry.json')), true)['abi'];
        $contractAddress = '0x06645a64162C388Eb9eD3E42C2F898B3c7455c46';
        $this->contract = new Contract($this->web3->provider, $abi);
        $this->contract->at($contractAddress);
    }
    /*public function addPage(){
    	return view('product.add');
    }*/

     public function store(Request $request)
{
    // Xác thực dữ liệu đầu vào
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required',
        'price' => 'required',
    ]);

    // Lưu thông tin sản phẩm vào cơ sở dữ liệu
    $product = Product::create($validatedData);

    // Tạo đường dẫn đến trang thông tin sản phẩm
    $url = route('product.show', ['productId' => $product->id]);
    // Tạo mã QR cho đường dẫn này
    $qrCode = QrCode::size(300)->generate($url);
    // Tạo mã QR dưới dạng base64
    $qrCodeBase64 = base64_encode(QrCode::format('png')->size(300)->generate($url));

    // Lưu mã QR vào cột qr_code của bảng products (giả sử bạn có cột này)
    $product->qr_code = $qrCodeBase64;
    $product->save();
    // Điều hướng đến trang hiển thị thông tin sản phẩm và mã QR
    return view('product.show', compact('product', 'qrCode'));

    // Lưu thông tin sản phẩm vào blockchain
    $name = $request->input('name');
    $description = $request->input('description');
    $price = $request->input('price');
        $account = '0x4Cb8d4F044f06f9a3964AEC80999850A35ab9cBC'; // Thay bằng địa chỉ tài khoản của bạn
        $privateKey = '0xd39af16e5594fba3b6c7bd5f12468e439874822b94fafad42f1af447df24b997'; // Thay bằng private key của bạn

        // Gọi hợp đồng thông minh để thêm sản phẩm vào blockchain
    $this->contract->send('addProduct', $name, $description, $price, ['from' => $account, 'gas' => 2000000], function ($err, $transaction) use ($product) {
        if ($err !== null) {
            // Nếu có lỗi, trả về thông báo lỗi
            return response()->json(['error' => $err->getMessage()], 500);
        }

        // Nếu thành công, chuyển hướng đến trang hiển thị thông tin sản phẩm vừa thêm
        
    });
    return redirect()->route('product.show', ['productId' => $product->id]);
    }

    public function show($productId)
    {
        // Lấy thông tin sản phẩm từ cơ sở dữ liệu
        $product = Product::find($productId);

        if (!$product) {
            return abort(404, 'Product not found');
        }

        return view('product.show', compact('product'));
    }



    

}