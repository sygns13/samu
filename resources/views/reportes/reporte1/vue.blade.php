<script type="text/javascript">
    let app = new Vue({
el: '#app',
data:{
       titulo:"Procesos de Atención",
       subtitulo: "Reportes",
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
   classTitle:'fa fa-print',
   classMenu0:'',
   classMenu1:'',
   classMenu2:'',
   classMenu3:'',
   classMenu4:'',
   classMenu5:'',
   classMenu6:'',
   classMenu7:'active',
   classMenu8:'',
   classMenu9:'',
   classMenu10:'',
   classMenu11:'',
   classMenu12:'',


   divprincipal:false,

   procesos: [],

   errors:[],

   fillLocal:{'id':'', 'nombre':'', 'direccion':'','estado':''},

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
   divloaderNuevo:false,
   divloaderEdit:false,

   thispage:'1',

   newlocal:'',
   newDir:'',
   newEstado:'1',

   dataimp:[],


   //filtros reportes
   tipoProceso: 0,
   proceso: 0,
   verProceso1 : false,
   verProceso2 : false,
   verProceso3 : false,
   verProceso4 : false,
   procesoImp: {},

},
created:function () {
   this.getLocal(this.thispage);
},
mounted: function () {
   this.divloader0=false;
   this.divprincipal=true;
   $("#divtitulo").show('slow');

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
   getLocal: function (page) {
       var busca=this.buscar;
       var url = 'intranet/reporte?page='+page+'&busca='+busca+'&proceso='+this.proceso;

       axios.get(url).then(response=>{
           this.procesos= response.data.procesos.data;
           this.pagination= response.data.pagination;

           if(this.procesos.length==0 && this.thispage!='1'){
               var a = parseInt(this.thispage) ;
               a--;
               this.thispage=a.toString();
               this.changePage(this.thispage);
           }
       })
   },
   changePage:function (page) {
       this.pagination.current_page=page;
       this.getLocal(page);
       this.thispage=page;
   },
   buscarBtn: function () {
       this.getLocal();
       this.thispage='1';
   },
   
   imprimirReporte: function(){


    var options = { extraHead : '<style rel="stylesheet" type="text/css" media="print">@page { size: portrait; } body {-webkit-print-color-adjust: exact; } #divImp{width: 30cm!important; } .saltoDePagina{ display:block; page-break-before:always;} #btncrearArea{display: none!important;} #btnvolver1{display: none!important;} #btnvolver2{display: none!important;} #tablaNoPrint{display: none!important;} #tablaPrint{display: block!important;} #titulo1{padding-top: 0px!important;} .logorep{ top:0mm!important;} #tablerep2{width:9cm;} #titulo7{display: block!important;} #tablelast{width:50%!important;} .divResult{display: none!important;} .title-imp{border: 1px solid gray!important;border-style: solid; color: white!important;background-color: rgb(0, 102, 204)!important;}</style>', strict:false  };
    $("#divImp").printArea(options);
        



    },

    imprimirFicha: function(numProceso, data){
        console.log(numProceso);
        console.log(data);

        this.procesoImp = data;
        this.tipoProceso = numProceso;

        this.verProceso1 = false;
        this.verProceso2 = false;
        this.verProceso3 = false;
        this.verProceso4 = false;

        switch (numProceso) {
            case 1:
                this.verProceso1 = true;
            break;
            case 2:
                this.verProceso2 = true;
            break;
            case 3:
                this.verProceso3 = true;
            break;
            case 4:
                this.verProceso4 = true;
            break;
        
            default:
            break;
        }

        $('#modalFicha').modal();
        
    },

    ImprimirFicha:function (usuario) {

        var options = { extraHead : '<style rel="stylesheet" type="text/css" media="print">@page { size: portrait; } body {-webkit-print-color-adjust: exact; } #divImp{width: 30cm!important; } .saltoDePagina{ display:block; page-break-before:always;} #btncrearArea{display: none!important;} #btnvolver1{display: none!important;} #btnvolver2{display: none!important;} #tablaNoPrint{display: none!important;} #tablaPrint{display: block!important;} #titulo1{padding-top: 0px!important;} .logorep{ top:0mm!important;} #tablerep2{width:9cm;} #titulo7{display: block!important;} #tablelast{width:50%!important;} .divResult{display: none!important;} .title-imp{border: 1px solid rgb(21, 21, 21)!important; color: #FFF!important;background-color: rgb(0, 102, 204)!important;} .title-imp-label{color: #FFF!important}</style>', strict:true  };
        

        switch (this.tipoProceso) {
            case 1:
                $("#Ficha1").printArea(options);
            break;
            case 2:
                $("#Ficha2").printArea(options);
            break;
            case 3:
                $("#Ficha3").printArea(options);
            break;
            case 4:
                $("#Ficha4").printArea(options);
            break;
        
            default:
            break;
        }

    },

    
   
   
   
  
  
  
}
});
</script>