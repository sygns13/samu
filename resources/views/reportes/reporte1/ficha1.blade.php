<div style="width: 18cm;padding-left: 0px;" class="panel panel-defaultPrint container-fluid spark-screen" id='printarea'>
    <div style="width: 18cm;padding-top: 0px;">
        
        <div style="width: 18cm;">

            

            <div style="width: 18.2cm;">




                <table>
                    <tbody>
                        <tr>
                           {{--  <td style="width: 3.2cm;text-align: center;padding-top: 20px;">
                                <img src="{{ asset('/img/unasam.png') }}" style="width: 72px;">
                            </td>

                            <td style="width: 11.5cm;;text-align: center;padding-top: 20px;">
                                <p style="margin-bottom: 0px;font-size: 19px"><strong>UNIVERSIDAD NACIONAL</strong></p>
                                <p style="margin-bottom: 0px;font-size: 19px"><strong>SANTIAGO ANTÚNEZ DE MAYOLO</strong></p>
                                <hr style="margin-top: 5px;margin-bottom: 5px; width: 370px;" class="hrP"> 
                                <p style="font-family: Monotype Corsiva; font-size: 22px; color:#EDB23B">Una Nueva Universidad para el Desarrollo</p>  


                            </td>
                            <td style="width: 3.52cm; text-align: center;padding-top: 20px;" >
                                <img v-if="filluser.imagen.length>0" id="divImgFIcha" src="{{ asset('/img/unasam.png') }}" style="width: 90px;height: 90px;" class="img img-responsive">
                            </td> --}}    

                            <td style="width: 18cm; text-align: center;padding-top: 20px;" >
                                <div class="col-md-xs">
                                    <img src="{{ asset('/img/imagen_cabeza.jpg') }}" width="100%;" height="118" class="img-responsive"/>
                       <h4 class="page-head-line" style="color: #009;float:left; display:block;padding-bottom:0px; border-bottom: 0px;margin-bottom: 0px;">DIRECCION REGIONAL DE SALUD ANCASH</h4>
                      
                 
                                 </div>
                            </td>                    
                        </tr>
                    </tbody>
                </table>



                
            </div>


            <div style="width: 18cm;">
                <table>
                    <tbody>
                        <tr>
                            <td style="width: 3.2cm; text-align: center;padding-top: 5px;">
                                
                            </td>

                            <td style="width: 11.5cm;text-align: center;padding-top: 15px;padding-bottom: 20px;">
                                
                                <p style="margin-bottom: 0px;font-size: 19px"><strong>FICHA DE RECEPCION Y GESTION DE LLAMADAS 106</strong></p>
                                
                            </td>
                            <td style="width: 3.52cm; text-align: center;padding-top: 5px;">
                                
                            </td>                    
                        </tr>
                    </tbody>
                </table>
            </div>








            <div style="width: 18cm;"> 
                <table>
                    <tbody>
                        <tr>
                            <td class="title-imp" style="width: 18cm; padding-top: 5px;padding-bottom: 5px; text-align: center; border: 1px solid rgb(21, 21, 21); color: #FFF;background-color: rgb(0, 102, 204);">
                                <p class="title-imp-label" style="margin-bottom: 0px;font-size: 13px"><strong class="title-imp-label" style="padding-left: 8px;"> 
                                    REGISTRO DE LLAMADAS
                                </strong></p>
                            </td>            
                     </tr>
                 </tbody>
             </table>
         </div>

            


            


        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                CODIGO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.codigo }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                BASE
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.samu }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                RESPONSABLE DEL REGISTRO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.cargoPersonal }}: @{{ procesoImp.apePersonal }} @{{ procesoImp.nomPersonal }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                TURNO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.turno }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                FECHA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.fecha | pasfechaVista }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                HORA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.hora_ingreso }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                LLAMADA PERTINENTE
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                    <template v-if="procesoImp.llamada_pertinente == '1'">
                                        SI
                                    </template>
                                    <template v-else>
                                        NO
                                    </template>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                TIPO DE LLAMADA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.tipoLlamada }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                LOCALIZACION DE LA LLAMADA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.localizacionLlamada }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                LLAMADA DERIVADA AL MEDICO REGULADOR
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                <template v-if="procesoImp.derivada == '1'">
                                    SI
                                </template>
                                <template v-else>
                                    NO
                                </template>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="width: 18cm;"> 
            <table>
                <tbody>
                    <tr>
                        <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                            <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                                OBSERVACIONES
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.observaciones }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>






    


    

</div>

</div>
</div>