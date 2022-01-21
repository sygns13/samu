<script type="text/javascript">
 let app = new Vue({
    el: '#app',
    data:{
        titulo:"Tablas Base",
        subtitulo: "Gestión del Personal del SAMU",
        subtitulo2: "Principal",

        subtitle2:false,
        subtitulo2:"",

        tipouserPerfil:'{{ $tipouser->nombre }}',
        userPerfil:'{{ Auth::user()->name }}',
        mailPerfil:'{{ Auth::user()->email }}',


        divloader0:true,
        divloader1:false,
        divloader2:false,
        divloader3:false,
        divloader4:false,
        divloader5:false,
        divloader6:false,
        divloader7:false,
        divloader8:false,
        divloader9:false,
        divloader10:false,
        divtitulo:true,
        classTitle:'fa fa-tasks',
        classMenu0:'',
        classMenu1:'active',
        classMenu2:'',
        classMenu3:'',
        classMenu4:'',
        classMenu5:'',
        classMenu6:'',
        classMenu7:'',
        classMenu8:'',
        classMenu9:'',
        classMenu10:'',
        classMenu11:'',
        classMenu12:'',
        classMenu13:'',
        classMenu14:'',
        classMenu15:'',


        registros: [],
        errors:[],

        fillobject:{ 'id':'', 'codigo':'', 'tipo_documento_id': 1, 'nro_documento':'', 'fecha_nacimiento':'', 'apellidos':'', 'nombres':'', 'telefono':'', 'genero':'M', 'edad':'', 'estado_civil_id': 1, 'ocupacion':'', 'nro_colegiatura':'', 'cargo_id': 1, 'activo': 1},

        pagination: {
            'total': 0,
            'current_page': 0,
            'per_page': 0,
            'last_page': 0,
            'from': 0,
            'to': 0
        },
        offset: 9,

        buscar:'',
        divNuevo:false,
        divEdit:false,

        codigo : '',
        tipo_documento_id : 1,
        nro_documento : '',
        fecha_nacimiento : '',
        apellidos : '',
        nombres : '',
        telefono : '',
        genero : 'M',
        edad : '',
        estado_civil_id : 1,
        ocupacion : '',
        nro_colegiatura : '',
        cargo_id : 1,
        activo : 1,


        divloaderNuevo:false,
        divloaderEdit:false,

        mostrarPalenIni:true,

        thispage:'1',
        divprincipal:false,


    },
    created:function () {
        this.getDatos(this.thispage);

        
    },
    mounted: function () {
        $("#divtitulo").show('slow');
        this.divloader0=false;
        this.divprincipal=true;
    },
    computed:{
        isActived: function(){
            return this.pagination.current_page;
        },
        pagesNumber: function () {
            if(!this.pagination.to){
                return [];
            }

            var from=this.pagination.current_page - this.offset 
            var from2=this.pagination.current_page - this.offset 
            if(from<1){
                from=1;
            }

            var to= from2 + (this.offset*2); 
            if(to>=this.pagination.last_page){
                to=this.pagination.last_page;
            }

            var pagesArray = [];
            while(from<=to){
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },

    filters:{
    mostrarNumero(value){
      
      if(value != null && value != undefined){
        value=parseFloat(value).toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
      }

      return value;
    },
    pasfechaVista:function(date){
        if(date!=null && date.length==10){
            date=date.slice(-2)+'/'+date.slice(-5,-3)+'/'+date.slice(0,4);            
        }else{
          return '';
        }

        return date;
    },
    leftpad:function(n, length) {
        var  n = n.toString();
        while(n.length < length)
            n = "0" + n;
        return n;
    }

  },

    methods: {


        getDatos: function (page) {
            var busca=this.buscar;
            var url = '/intranet/personal?page='+page+'&busca='+busca;

            axios.get(url).then(response=>{

                this.registros= response.data.registros.data;
                this.pagination= response.data.pagination;

                //this.mostrarPalenIni=true;

                if(this.registros.length==0 && this.thispage!='1'){
                    var a = parseInt(this.thispage) ;
                    a--;
                    this.thispage=a.toString();
                    this.changePage(this.thispage);
                }
            })
        },
        changePage:function (page) {
            this.pagination.current_page=page;
            this.getDatos(page);
            this.thispage=page;
        },
        buscarBtn: function () {
            this.getDatos();
            this.thispage='1';
        },
        nuevo:function () {
            this.divNuevo=true;
            this.divloaderEdit=false;
            this.$nextTick(function () {
                this.cancelForm();
            })
        },
        cerrarForm: function () {
            this.divNuevo=false;
            this.cancelForm();
        },
        cancelForm: function () {

            this.codigo = '';
            this.tipo_documento_id = 1;
            this.nro_documento = '';
            this.fecha_nacimiento = '';
            this.apellidos = '';
            this.nombres = '';
            this.telefono = '';
            this.genero = 'M';
            this.edad = '';
            this.estado_civil_id = 1;
            this.ocupacion = '';
            this.nro_colegiatura = '';
            this.cargo_id = 1;
            this.activo = 1;

            this.$nextTick(() => {
                $('#txtcodigo').focus();
            })

            this.divEdit=false;
        },
        create:function () {
            var url='/intranet/personal';

            $("#btnGuardar").attr('disabled', true);
            $("#btnCancel").attr('disabled', true);
            $("#btnClose").attr('disabled', true);

            this.divloaderNuevo=true;

            var data = new  FormData();

            data.append('codigo', this.codigo);
            data.append('tipo_documento_id', this.tipo_documento_id);
            data.append('nro_documento', this.nro_documento);
            data.append('fecha_nacimiento', this.fecha_nacimiento);
            data.append('apellidos', this.apellidos);
            data.append('nombres', this.nombres);
            data.append('telefono', this.telefono);
            data.append('genero', this.genero);
            data.append('edad', this.edad);
            data.append('estado_civil_id', this.estado_civil_id);
            data.append('ocupacion', this.ocupacion);
            data.append('nro_colegiatura', this.nro_colegiatura);
            data.append('cargo_id', this.cargo_id);
            data.append('activo', this.activo);


            const config = { headers: { 'Content-Type': 'multipart/form-data' } };

            axios.post(url,data,config).then(response=>{

                $("#btnGuardar").removeAttr("disabled");
                $("#btnCancel").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarForm();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                this.errors=error.response.data
            })
        },
        borrar:function (dato) {
          swal.fire({
              title: '¿Estás seguro?',
              text: "¿Desea eliminar el Registro seleccionado? -- Nota: Este proceso no se podrá revertir",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, eliminar'
          }).then((result) => {


            if (result.value) {
                var url = '/intranet/personal/'+dato.id;
                axios.delete(url).then(response=>{//eliminamos

                    if(response.data.result=='1'){
                        app.getDatos(app.thispage);//listamos
                        toastr.success(response.data.msj);//mostramos mensaje
                    }else{
                        // $('#'+response.data.selector).focus();
                        toastr.error(response.data.msj);
                    }
                });
            }

            }).catch(swal.noop);
        },
        edit:function (dato) {

            this.fillobject.id=dato.id;
            this.fillobject.codigo=dato.codigo;
            this.fillobject.tipo_documento_id=dato.tipo_documento_id;
            this.fillobject.nro_documento=dato.nro_documento;

            if(dato.fecha_nacimiento != null && dato.fecha_nacimiento != 'null'){
                this.fillobject.fecha_nacimiento=dato.fecha_nacimiento;
            }
            if(dato.edad != null && dato.edad != 'null'){
                this.fillobject.edad=dato.edad;
            }
            if(dato.ocupacion != null && dato.ocupacion != 'null'){
                this.fillobject.ocupacion=dato.ocupacion;
            }
            if(dato.nro_colegiatura != null && dato.nro_colegiatura != 'null'){
                this.fillobject.nro_colegiatura=dato.nro_colegiatura;
            }
            if(dato.telefono != null && dato.telefono != 'null'){
                this.fillobject.telefono=dato.telefono;
            }

            this.fillobject.apellidos=dato.apellidos;
            this.fillobject.nombres=dato.nombres;
            this.fillobject.genero=dato.genero;
            this.fillobject.estado_civil_id=dato.estado_civil_id;
            
            
            this.fillobject.cargo_id=dato.cargo_id;
            
            this.fillobject.activo=dato.activo;


            this.divNuevo=false;
            this.divEdit=true;
            this.divloaderEdit=false;

            this.$nextTick(() => {
                $('#txtcodigoE').focus();
            });

        },
        cerrarFormE: function(){

            this.divEdit=false;

            this.$nextTick(function () {
                this.fillobject={ 'id':'', 'codigo':'', 'tipo_documento_id': 1, 'nro_documento':'', 'fecha_nacimiento':'', 'apellidos':'', 'nombres':'', 'telefono':'', 'genero':'M', 'edad':'', 'estado_civil_id': 1, 'ocupacion':'', 'nro_colegiatura':'', 'cargo_id': 1, 'activo': 1};
    
            })

        },

        update: function (id) {

            var url="/intranet/personal/"+id;
            $("#btnSaveE").attr('disabled', true);
            $("#btnCloseE").attr('disabled', true);
            this.divloaderEdit=true;

            this.fillobject.oldImg= this.oldImg;
            var v1 = this.nivel;

            var data = new  FormData();

            data.append('codigo', this.fillobject.codigo);
            data.append('tipo_documento_id', this.fillobject.tipo_documento_id);
            data.append('nro_documento', this.fillobject.nro_documento);
            data.append('fecha_nacimiento', this.fillobject.fecha_nacimiento);
            data.append('apellidos', this.fillobject.apellidos);
            data.append('nombres', this.fillobject.nombres);
            data.append('telefono', this.fillobject.telefono);
            data.append('genero', this.fillobject.genero);
            data.append('edad', this.fillobject.edad);
            data.append('estado_civil_id', this.fillobject.estado_civil_id);
            data.append('ocupacion', this.fillobject.ocupacion);
            data.append('nro_colegiatura', this.fillobject.nro_colegiatura);
            data.append('cargo_id', this.fillobject.cargo_id);
            data.append('activo', this.fillobject.activo);

            data.append('_method', 'PUT');

            const config = { headers: { 'Content-Type': 'multipart/form-data' } };


            axios.post(url, data, config).then(response=>{


                $("#btnSaveE").removeAttr("disabled");
                $("#btnCloseE").removeAttr("disabled");
                this.divloaderEdit=false;
                
                if(response.data.result=='1'){   
                    this.getDatos(this.thispage);
                    this.cerrarFormE();
                    toastr.success(response.data.msj);

                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }

            }).catch(error=>{
                this.errors=error.response.data
            })
        },
        baja:function (dato) {
          swal.fire({
              title: '¿Estás seguro?',
              text: "Nota: Si se da de baja el Registro, No se mostrará en los formularios del Proceso de Atención Médica",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, dar de baja'
          }).then((result) => {

            if (result.value) {
                var url = '/intranet/personal/altabaja/'+dato.id+'/0';
                axios.get(url).then(response=>{//eliminamos

                    if(response.data.result=='1'){
                        app.getDatos(app.thispage);//listamos
                        toastr.success(response.data.msj);//mostramos mensaje
                    }else{
                        // $('#'+response.data.selector).focus();
                        toastr.error(response.data.msj);
                    }
                });
            }

        }).catch(swal.noop);
      },
      alta:function (dato) {
          swal.fire({
              title: '¿Estás seguro?',
              text: "Nota: Si da de alta el Registro, se mostrará en los formularios del Proceso de Atención Médica",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, dar de alta'
          }).then((result) => {

            if (result.value) {
                var url = '/intranet/personal/altabaja/'+dato.id+'/1';
                axios.get(url).then(response=>{//eliminamos

                if(response.data.result=='1'){
                    app.getDatos(app.thispage);//listamos
                    toastr.success(response.data.msj);//mostramos mensaje
                }else{
                    // $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
                });
            }
        }).catch(swal.noop);
      },
    

}
});
</script>