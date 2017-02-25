<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;
use App\Comment;
use App\Classify;
use App\Categories;
use App\Supplier;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // show list product
        $pro = Product::paginate(12);
        return view('product.index',['pro'=>$pro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //show form insert product
        $class = Classify::all();
        $sup = Supplier::all();
        $cate = Categories::all();
        return view('product.insert',['class'=>$class,'sup'=>$sup,'cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert product

        $this->validate($request,
            [
                'TenSP' => 'required',
                'GiaTien' => 'required',
                'SoLuong' => 'required',
                'DonViTinh' => 'required',
                'tomtat' => 'required',
                'mota' => 'required',
                'image' => 'required',
            ],
            [
                'TenSP.required' => 'Bạn chưa nhập tên sản phẩm',
                'GiaTien.required' => 'Bạn chưa nhập giá sản phẩm',
                'SoLuong.required' => 'Bạn chưa nhập sô lượng sản phẩm',
                'DonViTinh.required' => 'Bạn chưa nhập đơn vị tính sản phẩm',
                'tomtat.required' => 'Bạn chưa nhập tóm tắt sản phẩm',
                'mota.required' => 'Bạn chưa nhập mô tả sản phẩm',
                'image.required' => 'Bạn chưa chọn hình sản phẩm',
            ]
            );

        $path = $request->image;

        $ext = $path->getClientOriginalExtension();
        if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg')
        {
            return redirect('product/create')->with('loi','Vui lòng chọn file có đuôi .jpg,.png,.jpeg');
        }

        
        $link = "img/".str_random(4)."_".$path->getClientOriginalName();
        while (file_exists("/img".$link)) 
        {
            $link = "img/".str_random(4)."_".$path->getClientOriginalName();
            
            
        }

        $path->move(public_path('/img'),$link);

        $pro = new Product();

        $pro->ten= $request->TenSP;
        $pro->giatien=$request->GiaTien;
        $pro->soluong=$request->SoLuong;
        $pro->donvitinh=$request->DonViTinh;
        $pro->mota=$request->mota;
        $pro->idloai=$request->MaLoai;
        $pro->idnsx=$request->MaNSX;
        $pro->mota=$request->mota;
        $pro->tomtat=$request->tomtat;
        $pro->soluotxem=0;
        $pro->hinh=$link;
        $pro->noibat = $request->rdo == '1' ? 1:0;
        
        $pro->save();
        
        return redirect('product/create')->with('thongbao','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // show single product
        $pro = Product::find($id);
        $com = Comment::where('idsanpham',$id)->paginate(4);
        $data = $data= Cart::content();
        return view('product.show',['pro'=>$pro,'com'=>$com,'data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // show form edit product
        $product = Product::where('id',$id)->get();
        $class = Classify::all();
        $sup = Supplier::all();
        return view('product.edit',['product' => $product[0],'class'=>$class,'sup'=>$sup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // update product
        $this->validate($request,
            [
                'TenSP' => 'required',
                'GiaTien' => 'required',
                'SoLuong' => 'required',
                'DonViTinh' => 'required',
                'tomtat' => 'required',
                'mota' => 'required',
                'image' => 'required',
            ],
            [
                'TenSP.required' => 'Bạn chưa nhập tên sản phẩm',
                'GiaTien.required' => 'Bạn chưa nhập giá sản phẩm',
                'SoLuong.required' => 'Bạn chưa nhập sô lượng sản phẩm',
                'DonViTinh.required' => 'Bạn chưa nhập đơn vị tính sản phẩm',
                'tomtat.required' => 'Bạn chưa nhập tóm tắt sản phẩm',
                'mota.required' => 'Bạn chưa nhập mô tả sản phẩm',
                'image.required' => 'Bạn chưa chọn hình sản phẩm',
            ]
            );

        $path = $request->image;

        $ext = $path->getClientOriginalExtension();
        if($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg')
        {
            return redirect('product/create')->with('loi','Vui lòng chọn file có đuôi .jpg,.png,.jpeg');
        }

        
        $link = "img/".str_random(4)."_".$path->getClientOriginalName();
        while (file_exists("/img".$link)) 
        {
            $link = "img/".str_random(4)."_".$path->getClientOriginalName();
            
            
        }

        $pro = Product::find($id);

        $path->move(public_path('/img'),$link);
        

        $pro->ten= $request->TenSP;
        $pro->giatien=$request->GiaTien;
        $pro->soluong=$request->SoLuong;
        $pro->donvitinh=$request->DonViTinh;
        $pro->mota=$request->mota;
        $pro->idloai=$request->MaLoai;
        $pro->idnsx=$request->MaNSX;
        $pro->mota=$request->mota;
        $pro->tomtat=$request->tomtat;
        $pro->soluotxem=$request->soluotxem;
        $pro->hinh=$link;
        $pro->noibat = $request->rdo == '1' ? 1:0;
        
        $pro->save();
        
        return redirect("/product")->with('thongbao','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete product
        $pro = Product::find($id);
        $pro->delete();

        return redirect("/product")->with('thongbao','Xóa thành công');
    }

    /**
     * Show the form for delete the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // show form edit product
        $product = Product::where('id',$id)->get();

        return view('product.delete',['pro' => $product[0]]);
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $key = $request->search;
        $pro = Product::where('ten','like',"%$key%")->orwhere('tomtat','like',"%$key%")->orwhere('mota','like',"%$key%")->paginate(12);
        $data= Cart::content();
        return view('product.search', ['pro' => $pro,'data'=>$data]);
    }
}
