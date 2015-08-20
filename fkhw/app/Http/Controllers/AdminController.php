<?php

namespace fkhw\Http\Controllers;

use Illuminate\Http\Request;

use fkhw\Http\Requests;
use fkhw\User;
use fkhw\Http\Controllers\Controller;
use Auth;
use fkhw\Artikel;
use fkhw\Tags;
use Carbon\Carbon;
use DB;

class AdminController extends Controller
{
	public function getRegister(){
        return view('FKHW.Auth.Registration');
    }

    public function postRegister(Requests\Register $request){
        $data =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        \Session::flash('Berhasil','Berhasil Membuat Akun, Silahkan Login');
       return redirect('auth/login');
    }
   

   public function getLogin(){
   	return view('FKHW.Auth.Login');

   }

   public function postLogin(Requests\Login $request){
   	$email = $request->get('email');
	$password = $request->get('password');

   	if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            $username = Auth::user()->name;
            return view('FKHW.Admin.Index', compact('username'));
        }else{
         \Session::flash('GagalLogin','Email Atau Password Yang Anda Masukan Salah, Silahkan Coba Lagi');
        	return redirect('auth/login');
        }
   }

   public function index(){
   	$username = Auth::user()->name;
   	return view('FKHW.Admin.Index', compact('username'));
   }

   public function getLogout(){
   	$username = Auth::user()->name;
   	Auth::logout($username);
   	return redirect('auth/login');
   }

   public function getArtikel(){
   	$username = Auth::user()->name;
   	$opsitags = Tags::lists('opsi_tags', 'id');
   	return view('FKHW.Admin.BuatArtikel', compact('username', 'opsitags'));
   }

   public function postArtikel(Requests\Artikel $request){
   	$username = Auth::user()->name;
   	$tags = $request['Tags'];
   		$data = Artikel::create([
   			'judul' => $request['Judul'],
   			'penulis' => $request['Penulis'],
   			'isi' => $request['Isi'],
   			'created_at' => Carbon::now()
   			]);

   		$data->Tags()->attach($tags);
         \Session::flash('BerhasilMembuatArtikel','Anda Barusaja Menambahkan Artikel');
   	return redirect('Admin/artikel/list')->with('username');
   }

   public function getTags(){
   	$username = Auth::user()->name;
   	return view('FKHW.Admin.BuatTags', compact('username'));
   }

   public function postTags(Requests\Tags $request){
   	$username = Auth::user()->name;
   		$data = Tags::create([
   			'opsi_tags' => $request['Tags'],
   			'created_at' => Carbon::now()
   			]);
         \Session::flash('BerhasilMembuatTags','Anda Barusaja Menambahkan Tags Untuk Artikel');
   	return redirect('Admin/tags')->with('username');
   }

   public function getTagsList(){
   	$username = Auth::user()->name;
   		$list = Tags::paginate(10);
         $jumlahtags = Tags::count();
   		return view('FKHW.Admin.TagsList', compact('username', 'list', 'jumlahtags'));
   }

   public function editTags($id){
   	$username = Auth::user()->name;
   	$data = Tags::find($id);
   	return view('FKHW.Admin.EditTags', compact('username', 'data'));
   }

   public function editTagsProses($id, Requests\Tags $request){
   	$username = Auth::user()->name;
   	$req = $request['Tags'];
   	DB::table('tags')->where('id', [$id])->update(['opsi_tags' => $req]);
   	$list = Tags::paginate(10);
   	\Session::flash('BerhasilMengubahTags','Anda Barusaja Mengubah Tags');
   	return redirect('Admin/tags/list')->with('username', 'list');
   }


   public function deleteTags($id){
   	$username = Auth::user()->name;
   	$hapus = Tags::find($id)->delete();
   	$list = Tags::paginate(10);
      \Session::flash('BerhasilMenghapusTags','Anda Barusaja Menghapus Tags');
   		return redirect('Admin/tags/list')->with('username', 'list');
   }

   public function getArtikelList(){
   	$username = Auth::user()->name;
   		$list = Artikel::paginate(10);
         $jumlahartikel = Artikel::count();
   		return view('FKHW.Admin.ArtikelList', compact('username', 'list', 'jumlahartikel'));
   }

   public function editArtikel($id){
   	$username = Auth::user()->name;
   	$data = Artikel::find($id);
   	$opsitags = Tags::lists('opsi_tags', 'id');
   	$initags = $data->opsitags()->all();
   	
   	return view('FKHW.Admin.EditArtikel', compact('username', 'data', 'opsitags', 'initags'));
   }

   public function editArtikelProses($id, Requests\Artikel $request){
   	$username = Auth::user()->name;
   	$req = $request->all();
   	$find = Artikel::find($id);
   		DB::table('artikel')->where('id', [$id])
   			->update([
   				'judul' => $request['Judul'],
   				'penulis' => $request['Penulis'],
   				'isi' => $request['Isi']]);
   			$find->Tags()->sync($request['Tags']);
   	$list = Artikel::paginate(10);
      \Session::flash('BerhasilMengubahArtikel','Anda Barusaja Mengubah Artikel');
   	return redirect('Admin/artikel/list')->with('username', 'list');
   }

   public function deleteArtikel($id){
   	$username = Auth::user()->name;
   	$hapus = Artikel::find($id)->delete();
   	$list = Artikel::paginate(10);
      \Session::flash('BerhasilMenghapusArtikel','Anda Barusaja Menghapus Artikel');
   		return redirect('Admin/artikel/list')->with('username', 'list');
   }

   
}
