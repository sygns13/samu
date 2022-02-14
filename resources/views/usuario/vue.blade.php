<script type="text/javascript">
 let app = new Vue({
    el: '#app',
    data:{
        titulo:"Configuraciones",
        subtitulo: "Gestión de Usuarios",
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
        classTitle:'fa fa-user',
        classMenu0:'',
        classMenu1:'',
        classMenu2:'',
        classMenu3:'',
        classMenu4:'',
        classMenu5:'',
        classMenu6:'active',
        classMenu7:'',
        classMenu8:'',
        classMenu9:'',
        classMenu10:'',
        classMenu11:'',
        classMenu12:'',
        classMenu13:'',
        classMenu14:'',
        classMenu15:'',



        usuarios: [],

        tipousers: [],
        persona:[],
        user:[],
        errors:[],

        filluser:{ 'id':'', 'name':'', 'email':'', 'activo':'','personal_id':'','tipouser_id':'','codPersonal':'','docPersonal':'','apePersonal':'','nomPersonal':'','telPersonal':'','genPersonal':'','ocuPersonal':'','modifpassword': 0 , 'tipoDocPersonal':0, 'cargoPersonal':'', 'tipouser':'' , 'estadoCivilPersonal':''},

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
        divNuevoUsuario:false,
        divEditUsuario:false,

        name : '',
        email : '',
        activo : 1,
        personal_id : 0,
        tipouser_id : 0,
        password : '',


        divloaderNuevo:false,
        divloaderEdit:false,
        divloaderEditUsuario:false,


        formularioCrear:false,
        mostrarPalenIni:false,

        validated:'0',
        imagen : null,


        thispage:'1',

        divprincipal:false,


    },
    created:function () {
        this.getUsuarios(this.thispage);

        
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


        getUsuarios: function (page) {
            var busca=this.buscar;
            var url = 'usuario?page='+page+'&busca='+busca;

            axios.get(url).then(response=>{

                this.usuarios= response.data.usuarios.data;
                this.pagination= response.data.pagination;

                this.mostrarPalenIni=true;

                if(this.usuarios.length==0 && this.thispage!='1'){
                    var a = parseInt(this.thispage) ;
                    a--;
                    this.thispage=a.toString();
                    this.changePage(this.thispage);
                }
            })
        },
        changePage:function (page) {
            this.pagination.current_page=page;
            this.getUsuarios(page);
            this.thispage=page;
        },
        buscarBtn: function () {
            this.getUsuarios();
            this.thispage='1';
        },
        nuevoUsuario:function () {
            this.divNuevoUsuario=true;
            this.divloaderEditUsuario=false;

            this.$nextTick(function () {
                this.cancelFormUsuario();
            })
            
        },
        cerrarFormUsuario: function () {
            this.divNuevoUsuario=false;
            this.cancelFormUsuario();
        },
        cancelFormUsuario: function () {
            this.validated='0';
            this.$nextTick(function () {
                this.formularioCrear=false;
                $(".form-control").css("border","1px solid #d2d6de");
                $('#txtdni').focus();
            })
            this.name = '';
            this.email = '';
            this.activo = 1;
            this.personal_id = 0;
            this.tipouser_id = 0;
          
            this.password = '';
            

            this.divEditUsuario=false;


        },

        createUsuario:function () {
            var url='usuario';

            $("#btnGuardar").attr('disabled', true);
            $("#btnCancel").attr('disabled', true);
            $("#btnClose").attr('disabled', true);

            this.divloaderNuevo=true;


            var data = new  FormData();

            data.append('name', this.name);
            data.append('email', this.email);
            data.append('activo', this.activo);
            data.append('personal_id', this.personal_id);
            data.append('tipouser_id', this.tipouser_id);
           
            data.append('password', this.password);
            


            const config = { headers: { 'Content-Type': 'multipart/form-data' } };

            axios.post(url,data,config).then(response=>{

                $("#btnGuardar").removeAttr("disabled");
                $("#btnCancel").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    this.getUsuarios(this.thispage);
                    this.errors=[];
                    this.cerrarFormUsuario();
                    toastr.success(response.data.msj);
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                this.errors=error.response.data
            })
        },
        borrarUsuario:function (usuario) {
          swal.fire({
              title: '¿Estás seguro?',
              text: "¿Desea eliminar el usuario seleccionado? -- Nota: Este proceso no se podrá revertir",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, eliminar'
          }).then((result) => {


            if (result.value) {
            var url = 'usuario/'+usuario.id;
                            axios.delete(url).then(response=>{//eliminamos

                                if(response.data.result=='1'){
                                app.getUsuarios(app.thispage);//listamos
                                toastr.success(response.data.msj);//mostramos mensaje
                            }else{
                               // $('#'+response.data.selector).focus();
                               toastr.error(response.data.msj);
                           }
                       });
                    }

                        }).catch(swal.noop);
        },
        editUsuario:function (usuario) {
            
            this.filluser.id=usuario.id;
            this.filluser.name=usuario.name;
            this.filluser.email=usuario.email;
            this.filluser.activo=usuario.activo;
            this.filluser.personal_id=usuario.personal_id;
            this.filluser.tipouser_id=usuario.tipouser_id;
            this.filluser.codPersonal=usuario.codPersonal;
            this.filluser.docPersonal=usuario.docPersonal;
            this.filluser.apePersonal=usuario.apePersonal;
            this.filluser.nomPersonal=usuario.nomPersonal;
            this.filluser.telPersonal=usuario.telPersonal;
            this.filluser.genPersonal=usuario.genPersonal;
            this.filluser.ocuPersonal=usuario.ocuPersonal;
            this.filluser.tipoDocPersonal=usuario.tipoDocPersonal;
            this.filluser.cargoPersonal=usuario.cargoPersonal;
            this.filluser.tipouser=usuario.tipouser;
            this.filluser.estadoCivilPersonal=usuario.estadoCivilPersonal;
            this.filluser.modifpassword= 0;
            this.filluser.password='';
           

            this.divNuevoUsuario=false;
            this.divEditUsuario=true;
            this.divloaderEdit=false;

        },
        cerrarFormUsuarioE: function(){

            this.divEditUsuario=false;

            this.$nextTick(function () {
                this.filluser={ 'id':'', 'name':'', 'email':'', 'activo':'','personal_id':'','tipouser_id':'','codPersonal':'','docPersonal':'','apePersonal':'','nomPersonal':'','telPersonal':'','genPersonal':'','ocuPersonal':'','modifpassword': 0 , 'tipoDocPersonal':0, 'cargoPersonal':'', 'tipouser':'' , 'estadoCivilPersonal':''};
    
            })

        },

        modifclave: function(){

            if(this.filluser.modifpassword == 1){
                setTimeout(function(){ $("#txtpasswordE").focus(); }, 100);
            }
            if(this.filluser.modifpassword == 0){
                this.filluser.password='';
            }

        },

        updateUsuario: function (id) {

            var url="usuario/"+id;
            $("#btnSaveE").attr('disabled', true);
            $("#btnCloseE").attr('disabled', true);
            this.divloaderEdit=true;

            axios.put(url, this.filluser).then(response=>{


                $("#btnSaveE").removeAttr("disabled");
                $("#btnCloseE").removeAttr("disabled");
                this.divloaderEdit=false;
                
                if(response.data.result=='1'){   
                    this.getUsuarios(this.thispage);
                    this.cerrarFormUsuarioE();
                    toastr.success(response.data.msj);

                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }

            }).catch(error=>{
                this.errors=error.response.data
            })
        },
        bajaUsuario:function (usuario) {
          swal.fire({
              title: '¿Estás seguro?',
              text: "Nota: Si se desactiva el usuario, No podrá acceder al sistema, hasta que sea activado nuevamente",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, desactivar'
          }).then((result) => {

            if (result.value) {
            var url = 'usuario/altabaja/'+usuario.id+'/0';
                            axios.get(url).then(response=>{//eliminamos

                                if(response.data.result=='1'){
                                app.getUsuarios(app.thispage);//listamos
                                toastr.success(response.data.msj);//mostramos mensaje
                            }else{
                               // $('#'+response.data.selector).focus();
                               toastr.error(response.data.msj);
                           }
                       });
                    }

                        }).catch(swal.noop);
      },
      altaUsuario:function (usuario) {
          swal.fire({
              title: '¿Estás seguro?',
              text: "Nota: Si activa el usuario, podrá acceder al sistema nuevamente",
              type: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Si, Activar'
          }).then((result) => {

            if (result.value) {
            var url = 'usuario/altabaja/'+usuario.id+'/1';
                            axios.get(url).then(response=>{//eliminamos

                                if(response.data.result=='1'){
                                app.getUsuarios(app.thispage);//listamos
                                toastr.success(response.data.msj);//mostramos mensaje
                            }else{
                               // $('#'+response.data.selector).focus();
                               toastr.error(response.data.msj);
                           }
                       });

                     }

                        }).catch(swal.noop);
      },

      impFicha:function (usuario) {

            this.filluser.id=usuario.id;
            this.filluser.name=usuario.name;
            this.filluser.email=usuario.email;
            this.filluser.activo=usuario.activo;
            this.filluser.persona_id=usuario.persona_id;
            this.filluser.tipouser_id=usuario.tipouser_id;
            this.filluser.programaestudio_id=usuario.programaestudio_id;
            this.filluser.dni=usuario.dni;
            this.filluser.apellidos=usuario.apellidos;
            this.filluser.nombres=usuario.nombres;
            this.filluser.telefono=usuario.telefono;
            this.filluser.direccion=usuario.direccion;
            this.filluser.cargo=usuario.cargo;
            this.filluser.modifpassword= 0;
            this.filluser.password='';
            
            this.filluser.tipouser=usuario.tipouser;
            this.filluser.programaestudio=usuario.programaestudio;

            $('#modalFicha').modal(); 

    },
    Imprimir:function (usuario) {
        $("#FichaUsuario").printArea();
    },
    

}
});
</script>