<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Camiseta;
class Camisetas extends Controller{

    public function index(){

        $camiseta= new Camiseta();
        $datos['camisetas']= $camiseta->orderBy('id','ASC')->findAll();

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('camisetas/listar', $datos);

    }
    public function crear(){

        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('camisetas/crear', $datos);

    }
    public function guardar(){
        $camiseta= new Camiseta();
        $nombre= $this->request->getVar('nombre');
        if($imagen=$this->request->getFile('imagen')){
            $nuevoNombre= $imagen->getRandomName();
            $imagen->move('../public/uploads/',$nuevoNombre);
            $datos=[
                'nombre'=>$this->request->getVar('nombre'),
                'imagen'=>$nuevoNombre
            ];
            $camiseta->insert($datos);

        }

        return $this->response->redirect(site_url('/listar'));

    }
    public function borrar($id=null){
        $camiseta= new Camiseta();
        $datosCamiseta=$camiseta->where('id',$id)->first();

        $ruta=('../public/uploads/' .$datosCamiseta['imagen']);
        unlink($ruta);
        

        $camiseta->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/listar'));
    }
    public function editar($id=null){
        print_r($id);
        $camiseta= new Camiseta();

        $datos['camiseta']=$camiseta->where('id',$id)->first();

        
        $datos['cabecera']= view('template/cabecera');
        $datos['piepagina']= view('template/piepagina');

        return view('camisetas/editar', $datos);
    }

}