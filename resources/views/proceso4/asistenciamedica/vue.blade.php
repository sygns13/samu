<script type="text/javascript">
 let app = new Vue({
    el: '#app',
    data:{
        titulo:"Asistencia Médica en Foco",
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
        classTitle:'fa fa-user-md',
        classMenu0:'',
        classMenu1:'',
        classMenu2:'',
        classMenu3:'',
        classMenu4:'active',
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

        horafecha: '',


        registros: [],
        errors:[],

        fillobject: { 'id':'', 'codigo':'', 'relato_evento': '', 'es_gestante': 0, 'ocurrencias_atencion': '', 'personal_medico_id': 0, 'personal_enfermera_id': 0, 'requirio_traslado': 0, 'url':'', 'antecedentes':{}, 'pacientes_asistencia':{}, 'enfermedad_actuals':{}, 'examen_preferencials': {}, 'gestantes': {}, 'mecanismos_lesions':{}, 'diagnosticos1':{}, 'diagnosticos2':{}, 'diagnosticos3':{}, 'diagnosticos4': {}, 'tratamientos':{}, 'procedimientos': {}, 'establecimiento_destinos': {}, 'responsables': {}, archivo: null},

        antecedentes: { 'patologia_previa': '', 'medicacion':'', 'alergias':'', 'fur': '', 'gestacion': '', 'parto': '', 'aborto': ''},

        pacientes_asistencia: { 'tipo_documento_paciente_id': 0, 'nro_documento':'', 'apellidos':'', 'nombres': '', 'tipo_telefono': 1, 'telefono': '', 'genero': 'M', 'tipo_edad':1, 'edad':'', 'seguro_id':0},
        
        enfermedad_actuals: { 'tiempo': '', 'inicio': 0, 'curso': 0, 'sintomas': ''},

        examen_preferencials: { 'fc': '', 'fr':'', 'pa':'', 'temperatura': '', 'saturacion': '', 'glicemia': '', 'ocular': '', 'verbal':'', 'motora':'', 'piel_check1': false, 'piel_check2':false, 'piel_check3': false, 'piel_check4': false, 'pupilas':'', 'cabeza_check1':false, 'cabeza_check2': false, 'cabeza_check3': false, 'cabeza_check4': false, 'cabeza_check5': false, 'cabeza_check6': false, 'torax_check1': false, 'torax_check2': false, 'torax_check3': false, 'torax_check4': false, 'torax_check5': false, 'torax_check6': false, 'cardiovascular_check1': false, 'cardiovascular_check2': false, 'cardiovascular_check3': false, 'cardiovascular_check4': false, 'cardiovascular_obs': '', 'abdomen_check1': false, 'abdomen_check2': false, 'abdomen_check3': false, 'abdomen_check4': false, 'abdomen_check5': false, 'abdomen_check6': false, 'abdomen_otros': ''  },

        gestantes: {'au':'', 'fcf':'', 'mf': 0, 'situacion': 0, 'presentacion': 0, 'posicion': 0, 'mo': 0, 'du':'', 'i': 0, 'f': '', 'dilatacion': '', 'b': '', 'ap': 0, 'pla':'No', 'genitourinario_check1': false, 'genitourinario_check2': false, 'genitourinario_check3': false, 'genitourinario_check4': false, 'genitourinario_check5': false, 'locomotor_check1': false, 'locomotor_check2': false, 'locomotor_check3': false, 'neurologico_check1': false, 'neurologico_check2': false, 'neurologico_check3': false, 'neurologico_check4': false, 'neurologico_check5': false, 'neurologico_check6': false, 'neurologico_check7': false, 'neurologico_check8': false, 'otros':''},

        mecanismos_lesions: { 'tipo_accidente': 0, 'vehiculo':0 , 'impacto': 0, 'persona_afectada': 0, 'proteccion_check1': false, 'proteccion_check2': false, 'proteccion_check3': false, 'situacion_check1': false, 'situacion_check2': false, 'situacion_check3': false, 'agrecion': 0, 'ahogamiento': 'No', 'caida_altura': '', 'quemaduras': '', 'sc_tipo': 0 , 'grado_check1': false, 'grado_check2': false, 'grado_check3': false, 'grado_check4': false},

        diagnosticos1: {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0},
        diagnosticos2: {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0},
        diagnosticos3: {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0},
        diagnosticos4: {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0},

        tratamientos: { 'oxigenoterapia': 0, 'flujo':'', 'fluidoterapia':0, 'fluidoterapia_a': '', 'medicamentos': '', 'via': 0, 'hora': ''},

        procedimientos: { 'proc_check1': false, 'proc_check2': false, 'proc_check3': false, 'proc_check4': false, 'proc_check5': false, 'proc_check6': false, 'proc_check7': false, 'proc_check8': false, 'proc_check9': false, 'proc_check10': false, 'proc_check11': false, 'proc_check12': false, 'proc_check13': false, 'proc_check14': false, 'proc_check15': false},

        establecimiento_destinos: {'hora_llegada': '', 'establecimiento': 0, 'categoria': '', 'hora_recepcion': '', 'profesional_acepta':'', 'apellidos_nombres_profecional': '', 'hora_salida': ''},

        responsables: {'tipo_documento_id': 0, 'nro_documento': '', 'apellidos': '', 'nombres': '', 'parentesco': 'NO IDENTIFICADO', 'pertenencias_paciente': ''},


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

        archivo : null,
        nombrefile : '',
        uploadReady: true,

        oldFile:'',
        file:'',

        nameAdjunto:'',
        urlAdjunto:'',
        iflink:false,
        nameAdjuntoE:'',


    },
    created:function () {
        //this.getDatos(this.thispage);

        
    },
    mounted: function () {
        $("#divtitulo").show('slow');
        this.divloader0=false;
        this.divprincipal=true;
        this.nuevo();
        setInterval(this.obtenerHora, 1000);
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

            this.fillobject = { 'id':'', 'codigo':'', 'relato_evento': '', 'es_gestante': 0, 'ocurrencias_atencion': '', 'personal_medico_id': 0, 'personal_enfermera_id': 0, 'requirio_traslado': 0, 'url':'', 'antecedentes':{}, 'pacientes_asistencia':{}, 'enfermedad_actuals':{}, 'examen_preferencials': {}, 'gestantes': {}, 'mecanismos_lesions':{}, 'diagnosticos1':{}, 'diagnosticos2':{}, 'diagnosticos3':{}, 'diagnosticos4': {}, 'tratamientos':{}, 'procedimientos': {}, 'establecimiento_destinos': {}, 'responsables': {}, archivo: null};

            this.antecedentes = { 'patologia_previa': '', 'medicacion':'', 'alergias':'', 'fur': '', 'gestacion': '', 'parto': '', 'aborto': ''};

            this.pacientes_asistencia = { 'tipo_documento_paciente_id': 0, 'nro_documento':'', 'apellidos':'', 'nombres': '', 'tipo_telefono': 1, 'telefono': '', 'genero': 'M', 'tipo_edad':1, 'edad':'', 'seguro_id':0};
            
            this.enfermedad_actuals = { 'tiempo': '', 'inicio': 0, 'curso': 0, 'sintomas': ''};

            this.examen_preferencials = { 'fc': '', 'fr':'', 'pa':'', 'temperatura': '', 'saturacion': '', 'glicemia': '', 'ocular': '', 'verbal':'', 'motora':'', 'piel_check1': false, 'piel_check2':false, 'piel_check3': false, 'piel_check4': false, 'pupilas':'', 'cabeza_check1':false, 'cabeza_check2': false, 'cabeza_check3': false, 'cabeza_check4': false, 'cabeza_check5': false, 'cabeza_check6': false, 'torax_check1': false, 'torax_check2': false, 'torax_check3': false, 'torax_check4': false, 'torax_check5': false, 'torax_check6': false, 'cardiovascular_check1': false, 'cardiovascular_check2': false, 'cardiovascular_check3': false, 'cardiovascular_check4': false, 'cardiovascular_obs': '', 'abdomen_check1': false, 'abdomen_check2': false, 'abdomen_check3': false, 'abdomen_check4': false, 'abdomen_check5': false, 'abdomen_check6': false, 'abdomen_otros': ''  };

            this.gestantes = {'au':'', 'fcf':'', 'mf': 0, 'situacion': 0, 'presentacion': 0, 'posicion': 0, 'mo': 0, 'du':'', 'i': 0, 'f': '', 'dilatacion': '', 'b': '', 'ap': 0, 'pla':'No', 'genitourinario_check1': false, 'genitourinario_check2': false, 'genitourinario_check3': false, 'genitourinario_check4': false, 'genitourinario_check5': false, 'locomotor_check1': false, 'locomotor_check2': false, 'locomotor_check3': false, 'neurologico_check1': false, 'neurologico_check2': false, 'neurologico_check3': false, 'neurologico_check4': false, 'neurologico_check5': false, 'neurologico_check6': false, 'neurologico_check7': false, 'neurologico_check8': false, 'otros':''};

            this.mecanismos_lesions = { 'tipo_accidente': 0, 'vehiculo':0 , 'impacto': 0, 'persona_afectada': 0, 'proteccion_check1': false, 'proteccion_check2': false, 'proteccion_check3': false, 'situacion_check1': false, 'situacion_check2': false, 'situacion_check3': false, 'agrecion': 0, 'ahogamiento': 'No', 'caida_altura': '', 'quemaduras': '', 'sc_tipo': 0 , 'grado_check1': false, 'grado_check2': false, 'grado_check3': false, 'grado_check4': false};

            this.diagnosticos1 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
            this.diagnosticos2 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
            this.diagnosticos3 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
            this.diagnosticos4 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};

            this.tratamientos = { 'oxigenoterapia': 0, 'flujo':'', 'fluidoterapia':0, 'fluidoterapia_a': '', 'medicamentos': '', 'via': 0, 'hora': ''};

            this.procedimientos = { 'proc_check1': false, 'proc_check2': false, 'proc_check3': false, 'proc_check4': false, 'proc_check5': false, 'proc_check6': false, 'proc_check7': false, 'proc_check8': false, 'proc_check9': false, 'proc_check10': false, 'proc_check11': false, 'proc_check12': false, 'proc_check13': false, 'proc_check14': false, 'proc_check15': false};

            this.establecimiento_destinos = {'hora_llegada': '', 'establecimiento': 0, 'categoria': '', 'hora_recepcion': '', 'profesional_acepta':'', 'apellidos_nombres_profecional': '', 'hora_salida': ''};

            this.responsables = {'tipo_documento_id': 0, 'nro_documento': '', 'apellidos': '', 'nombres': '', 'parentesco': 'NO IDENTIFICADO', 'pertenencias_paciente': ''};

            this.archivo=null;
            this.uploadReady = false
            this.$nextTick(() => {
            this.uploadReady = true;
                $('#txtcodigo').focus();
            })

            this.divEdit=false;


        },
        create:function () {
            var url='/intranet/proceso4';

            $("#btnGuardar").attr('disabled', true);
            $("#btnCancel").attr('disabled', true);
            $("#btnClose").attr('disabled', true);

            this.divloaderNuevo=true;

            this.fillobject.antecedentes = this.antecedentes;
            this.fillobject.pacientes_asistencia = this.pacientes_asistencia;
            this.fillobject.enfermedad_actuals = this.enfermedad_actuals;
            this.fillobject.examen_preferencials = this.examen_preferencials;
            this.fillobject.gestantes = this.gestantes;
            this.fillobject.mecanismos_lesions = this.mecanismos_lesions;
            this.fillobject.diagnosticos1 = this.diagnosticos1;
            this.fillobject.diagnosticos2 = this.diagnosticos2;
            this.fillobject.diagnosticos3 = this.diagnosticos3;
            this.fillobject.diagnosticos4 = this.diagnosticos4;
            this.fillobject.tratamientos = this.tratamientos;
            this.fillobject.procedimientos = this.procedimientos;
            this.fillobject.establecimiento_destinos = this.establecimiento_destinos;
            this.fillobject.responsables = this.responsables;
            this.fillobject.archivo = this.archivo;


            var data = new  FormData();

            /* data.append('fillobject', this.fillobject);
            data.append('archivo', this.archivo); */


            const config = { headers: { 'Content-Type': 'multipart/form-data' } };

            axios.post(url, this.fillobject).then(response=>{

                $("#btnGuardar").removeAttr("disabled");
                $("#btnCancel").removeAttr("disabled");
                $("#btnClose").removeAttr("disabled");
                this.divloaderNuevo=false;

                if(response.data.result=='1'){
                    
                    if(this.archivo!=null){
                        this.cargarFile();
                    }
                    else{
                        //this.getDatos(this.thispage);
                    this.errors=[];
                    this.cerrarForm();
                    //toastr.success(response.data.msj);
                    Swal.fire(
                    'Correcto!',
                    response.data.msj,
                    'success'
                    ); 
                    }
                    
                }else{
                    $('#'+response.data.selector).focus();
                    toastr.error(response.data.msj);
                }
            }).catch(error=>{
                this.errors=error.response.data
            })
        },

        cargarFile:function () {
            var url='/intranet/proceso4cargarfile';

            $("#btnGuardar").attr('disabled', true);
            $("#btnCancel").attr('disabled', true);
            $("#btnClose").attr('disabled', true);

            this.divloaderNuevo=true;



            var data = new  FormData();


            data.append('archivo', this.archivo);
            data.append('codigo', this.fillobject.codigo);


            const config = { headers: { 'Content-Type': 'multipart/form-data' } };

            axios.post(url, data, config).then(response=>{

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


        changeProvincia: function(){
            this.fillobject.distrito_id=0;
        },

        obtenerHora: function(){
        var fecha = new Date();
        var dia_semana = [
        "Domingo",
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado"
        ];

        var mes = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
        ];

        var dame_fecha = dia_semana[fecha.getDay()] + ", " + fecha.getDate() + " de " + mes[fecha.getMonth()] + " del " + fecha.getFullYear();
        $("#horafecha").text(dame_fecha);

        this.horafecha = dame_fecha;

        var hora = new Date();

        var secs=hora.getSeconds();

        if(secs<10){
            var secs="0"+secs;
        }


        var dame_hora = hora.getHours() + ":" + hora.getMinutes() + ":" + secs;

        this.horafecha = this.horafecha + " " + dame_hora;

        },
        cambiarDoc:function () {

            var url='/intranet/buscarDocPaciente';

            axios.post(url,{nro_documento:this.pacientes_asistencia.nro_documento, tipo_documento_paciente_id:this.pacientes_asistencia.tipo_documento_paciente_id}).then(response=>{

                if(String(response.data.result)=='1'){
                    this.pacientes_asistencia.apellidos=response.data.paciente.apellidos;
                    this.pacientes_asistencia.nombres=response.data.paciente.nombres;
                    this.pacientes_asistencia.tipo_telefono=response.data.paciente.tipo_telefono;
                    this.pacientes_asistencia.telefono=response.data.paciente.telefono;
                    this.pacientes_asistencia.genero=response.data.paciente.genero;
                    this.pacientes_asistencia.edad=response.data.paciente.edad;
                    this.pacientes_asistencia.tipo_edad=response.data.paciente.tipo_edad;
                    this.pacientes_asistencia.seguro_id=response.data.paciente.seguro_id;
                }

            }).catch(error=>{
                //this.errors=error.response.data
            })
        },

        esGestante:function () {

            if(this.fillobject.es_gestante == 0){
                this.fillobject.es_gestante = 1;
            }else{
                this.fillobject.es_gestante = 0;
            }

            console.log(this.fillobject.es_gestante);

        },
        getArchivo(event){
            //Asignamos la imagen a  nuestra data

            if (!event.target.files.length)
            {
              this.archivo=null;
            }
            else{
            this.archivo = event.target.files[0];
            }
        },

        buscardiagnosticoscie1:function () {

            if(this.diagnosticos1.cie10.length >= 4){
                var url='/intranet/buscardiagnosticoscie';

                axios.post(url,{cie10:this.diagnosticos1.cie10}).then(response=>{

                    if(String(response.data.result)=='1'){
                        this.diagnosticos1.cie10 = response.data.diagnostico.codigo;
                        this.diagnosticos1.descripcion = response.data.diagnostico.descripcion;
                        this.diagnosticos1.cie_diagnostico_id = response.data.diagnostico.id;
                    }
                    else{
                        this.diagnosticos1 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
                    }

                }).catch(error=>{
                    //this.errors=error.response.data
                })
            }
            else{
                this.diagnosticos1 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
            }
        },

        buscardiagnosticoscie2:function () {

            if(this.diagnosticos2.cie10.length >= 4){
                var url='/intranet/buscardiagnosticoscie';

                axios.post(url,{cie10:this.diagnosticos2.cie10}).then(response=>{

                    if(String(response.data.result)=='1'){
                        this.diagnosticos2.cie10 = response.data.diagnostico.codigo;
                        this.diagnosticos2.descripcion = response.data.diagnostico.descripcion;
                        this.diagnosticos2.cie_diagnostico_id = response.data.diagnostico.id;
                    }
                    else{
                        this.diagnosticos2 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
                    }

                }).catch(error=>{
                    //this.errors=error.response.data
                })
            }
            else{
                this.diagnosticos2 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
            }
        },
        buscardiagnosticoscie3:function () {

            if(this.diagnosticos3.cie10.length >= 4){
                var url='/intranet/buscardiagnosticoscie';

                axios.post(url,{cie10:this.diagnosticos3.cie10}).then(response=>{

                    if(String(response.data.result)=='1'){
                        this.diagnosticos3.cie10 = response.data.diagnostico.codigo;
                        this.diagnosticos3.descripcion = response.data.diagnostico.descripcion;
                        this.diagnosticos3.cie_diagnostico_id = response.data.diagnostico.id;
                    }
                    else{
                        this.diagnosticos3 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
                    }

                }).catch(error=>{
                    //this.errors=error.response.data
                })
            }
            else{
                this.diagnosticos3 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
            }
        },
        buscardiagnosticoscie4:function () {

            if(this.diagnosticos4.cie10.length >= 4){
                var url='/intranet/buscardiagnosticoscie';

                axios.post(url,{cie10:this.diagnosticos4.cie10}).then(response=>{

                    if(String(response.data.result)=='1'){
                        this.diagnosticos4.cie10 = response.data.diagnostico.codigo;
                        this.diagnosticos4.descripcion = response.data.diagnostico.descripcion;
                        this.diagnosticos4.cie_diagnostico_id = response.data.diagnostico.id;
                    }
                    else{
                        this.diagnosticos4 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
                    }

                }).catch(error=>{
                    //this.errors=error.response.data
                })
            }
            else{
                this.diagnosticos4 = {'cie10': '', 'descripcion': '', 'cie_diagnostico_id': 0};
            }
        },
}
});
</script>