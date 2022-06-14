<?php

    namespace app\models;
    
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;
    
    class Mesa extends Model
    {
        use SoftDeletes;
    
        //Establezco la 'configuracion' de la tabla perteneciente a esta clase.
        protected $primaryKey = 'IdMesa';
        protected $table = 'mesas';
        public $incremeting = true;
        public $timestamps = true;
    
        //Redefino el nombre de mis columnas "CREATED_AT, DELETED_AT, UPDATED_AT".
        const CREATED_AT = 'fechaAlta';
        const DELETED_AT = 'fechaBaja';
        const UPDATED_AT = 'fechaModificacion';
    
        public $fillable = [
            'Estado','Descripcion',
            'Codigo','FechaAlta',
            'FechaBaja','FechaModificacion'
        ]; 
    }
?>