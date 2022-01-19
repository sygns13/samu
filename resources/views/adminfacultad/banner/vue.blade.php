<script type="text/javascript">
 let app = new Vue({
    el: '#app',
    data:{
        titulo:"Portal Web FEC",
        subtitulo: "Gestión de Banners",
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
        classTitle:'fa fa-list-alt',
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


        banners: [],
        errors:[],

        fillobject:{ 'id':'', 'posision':'', 'nombre':'', 'url':'','activo':'','oldImg':''},

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

        posision : '',
        nombre : '',
        url : '',
        activo : 1,


        divloaderNuevo:false,
        divloaderEdit:false,

        mostrarPalenIni:true,

        thispage:'1',
        divprincipal:false,

        imagen : null,
        uploadReady: true,

        imagenE : null,
        uploadReadyE: false,

        oldImg:'',
        image:'',

        //seccion facultades
        nivel : 1,
        facultad_id: 1,


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
            var v1 = this.nivel;
            var v2 = this.facultad_id;
            var v3 = 0;
            var url = '/intranet/bannerre?page='+page+'&busca='+busca+'&v1='+v1+'&v2='+v2+'&v3='+v3;

            axios.get(url).then(response=>{

                this.banners= response.data.banners.data;
                this.pagination= response.data.pagination;

                //this.mostrarPalenIni=true;

                if(this.banners.length==0 && this.thispage!='1'){
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
            this.posision = '';
            this.nombre = '';
            this.url = '';
            this.activo = 1;

            this.imagen=null;
            this.uploadReady = false
            this.$nextTick(() => {
            this.uploadReady = true;
                $('#txtnombre').focus();
            })

            this.divEdit=false;
        },
        getImage(event){
            //Asignamos la imagen a  nuestra data

            if (!event.target.files.length)
            {
                this.imagen=null;
            }
            else{
            this.imagen = event.target.files[0];
            }
        },

        create:function () {
            var url='/intranet/bannerre';

            $("#btnGuardar").attr('disabled', true);
            $("#btnCancel").attr('disabled', true);
            $("#btnClose").attr('disabled', true);

            this.divloaderNuevo=true;

            var v1 = this.nivel;
            var v2 = this.facultad_id;
            var v3 = 0;


            var data = new  FormData();

            data.append('posision', this.posision);
            data.append('nombre', this.nombre);
            data.append('url', this.url);
            data.append('activo', this.activo);
            data.append('imagen', this.imagen);
            data.append('v1', v1);
            data.append('v2', v2);
            data.append('v3', v3);



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
              text: "¿Desea eliminar el Banner seleccionado? -- Nota: Este proceso no se podrá revertir",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, eliminar'
          }).then((result) => {


            if (result.value) {
                var url = '/intranet/bannerre/'+dato.id;
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

        this.uploadReadyE=false;
        this.$nextTick(() => {
            this.imagenE=null;
            this.uploadReadyE=true;
        });
            
            this.fillobject.id=dato.id;
            this.fillobject.posision=dato.posision;
            this.fillobject.nombre=dato.nombre;
            this.fillobject.url=dato.url;
            this.fillobject.activo=dato.activo;

            this.oldImg=dato.url;
           

            this.divNuevo=false;
            this.divEdit=true;
            this.divloaderEdit=false;

            this.$nextTick(() => {
                $('#txtnombreE').focus();
            });

        },
        cerrarFormE: function(){

            this.divEdit=false;

            this.$nextTick(function () {
                this.fillobject={ 'id':'', 'posision':'', 'nombre':'', 'url':'','activo':'','oldImg':''};
    
            })

        },

        getImageE(event){
            if (!event.target.files.length)
            {
                this.imagenE=null;
            }
            else{
            this.imagenE = event.target.files[0];
            }
        },

        update: function (id) {

            var url="/intranet/bannerre/"+id;
            $("#btnSaveE").attr('disabled', true);
            $("#btnCloseE").attr('disabled', true);
            this.divloaderEdit=true;

            this.fillobject.oldImg= this.oldImg;
            var v1 = this.nivel;

            var data = new  FormData();

            data.append('id', this.fillobject.id);
            data.append('posision', this.fillobject.posision);
            data.append('nombre', this.fillobject.nombre);
            data.append('url', this.fillobject.url);
            data.append('activo', this.fillobject.activo);

            data.append('imagen', this.imagenE);
            data.append('oldimg', this.fillobject.oldImg);
            data.append('v1', v1);

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
              text: "Nota: Si se desactiva el Banner, No se mostrará en el Portal Web, hasta que sea activado nuevamente",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, desactivar'
          }).then((result) => {

            if (result.value) {
                var url = '/intranet/bannerre/altabaja/'+dato.id+'/0';
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
              text: "Nota: Si activa el Banner, se mostrará en el Portal Web en el número de su posición",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, Activar'
          }).then((result) => {

            if (result.value) {
                var url = '/intranet/bannerre/altabaja/'+dato.id+'/1';
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