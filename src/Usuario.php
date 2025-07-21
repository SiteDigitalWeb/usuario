<?php
namespace Sitedigitalweb\Usuario;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model{

 protected $table = 'users';
 public $timestamps = true;

 protected $fillable = [
 'name', 'compania', 'documento', 'tipo_documento', 'celular', 'pais', 'ciudad', 'email', 'address', 'phone', 'rol_id', 'password', 'remember_token',
 ];

 public function events(){
 return $this->hasMany('\Sitedigitalweb\Calendario\Calendar');
 }

 public function fichas(){
 return $this->hasMany('\Sitedigitalweb\Pagina\Fichaje');
 }

 protected $hidden = array('password', 'remember_token');

}
