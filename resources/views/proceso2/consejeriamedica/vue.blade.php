<script type="text/javascript">
 let app = new Vue({
    el: '#app',
    data:{
        titulo:"Consejería Médica Telefónica de Urgencia",
        subtitulo: "Formulario de Registro",
        subtitulo2: "",

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
        classTitle:'fa fa-stethoscope',
        classMenu0:'',
        classMenu1:'',
        classMenu2:'',
        classMenu3:'active',
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

        fillobject:{ 'id':'', 'codigo':'', 'hora': '', 'personal_id': 0, 'tipo_documento_paciente_id': 0, 'nro_documento':'', 'apellidos':'', 'nombres': '', 'tipo_telefono': 1, 'telefono': '', 'genero': 'M', 'tipo_edad':1, 'edad':'', 'seguro_id':0, 'prioridad_id': 0, 'cie_diagnostico_id': '', 'cie_diagnostico_descripcion':'', 'requiere_despacho':1 },

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

        divloaderNuevo:false,
        divloaderEdit:false,

        mostrarPalenIni:true,

        thispage:'1',
        divprincipal:false,


    },
    created:function () {
        //this.getDatos(this.thispage);

        
    },
    mounted: function () {
        $("#divtitulo").show('slow');
        this.divloader0=false;
        this.divprincipal=true;
        this.nuevo();
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
            this.fillobject = { 'id':'', 'codigo':'', 'hora': '', 'personal_id': 0, 'tipo_documento_paciente_id': 0, 'nro_documento':'', 'apellidos':'', 'nombres': '', 'tipo_telefono': 1, 'telefono': '', 'genero': 'M', 'tipo_edad':1, 'edad':'', 'seguro_id':0, 'prioridad_id': 0, 'cie_diagnostico_id': '', 'cie_diagnostico_descripcion':'', 'requiere_despacho':1 };

            this.$nextTick(() => {
                $('#txtcodigo').focus();
            })

            this.divEdit=false;
        },
        create:function () {
            var url='/intranet/proceso2';

            $("#btnGuardar").attr('disabled', true);
            $("#btnCancel").attr('disabled', true);
            $("#btnClose").attr('disabled', true);

            this.divloaderNuevo=true;

            var data = new  FormData();

            data.append('fillobject', this.fillobject);


            const config = { headers: { 'Content-Type': 'multipart/form-data' } };

            axios.post(url, this.fillobject).then(response=>{

                $("#btnGuardar").removeAttr("disabled");
                $("#btnCancel").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    //this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarForm();
                    //toastr.success(response.data.msj);
                    Swal.fire(
                    'Correcto!',
                    response.data.msj,
                    'success'
                    );
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                this.errors=error.response.data
            })
        },
        cambiarDoc:function () {

            var url='/intranet/buscarDocPaciente';

            axios.post(url,{nro_documento:this.fillobject.nro_documento, tipo_documento_paciente_id:this.fillobject.tipo_documento_paciente_id}).then(response=>{

                if(String(response.data.result)=='1'){
                    this.fillobject.apellidos=response.data.paciente.apellidos;
                    this.fillobject.nombres=response.data.paciente.nombres;
                    this.fillobject.tipo_telefono=response.data.paciente.tipo_telefono;
                    this.fillobject.telefono=response.data.paciente.telefono;
                    this.fillobject.genero=response.data.paciente.genero;
                    this.fillobject.edad=response.data.edad;
                    this.fillobject.tipo_edad=response.data.tipo_edad;
                    this.fillobject.seguro_id=response.data.seguro_id;
                }

            }).catch(error=>{
                //this.errors=error.response.data
            })
        },
        buscarDiagnosticos:function(){

            this.getDatosDiagnosticos();
            $("#modalDiagnostico").modal('show');
        },
        getDatosDiagnosticos: function (page) {
            var busca=this.buscar;
            var url = '/intranet/diagnosticos/getdiagnosticos?page='+page+'&busca='+busca;
            //var url = '/intranet/diagnosticoscie?page='+page+'&busca='+busca;

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
            this.getDatosDiagnosticos(page);
            this.thispage=page;
        },
        buscarBtn: function () {
            this.getDatosDiagnosticos();
            this.thispage='1';
        },
        seleccionarDiagnostico: function (registro){
            if(registro != null){
                this.fillobject.cie_diagnostico_id=registro.id;
                this.fillobject.cie_diagnostico_descripcion=registro.codigo +' - '+ registro.descripcion;
                $("#modalDiagnostico").modal('hide');
            }
        }
}
});
</script>