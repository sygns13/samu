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
                                
                                <p style="margin-bottom: 0px;font-size: 19px"><strong>FICHA DE DESPACHO DE LA UNIDAD MÓVIL</strong></p>
                                
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
                                    I. REGISTRO DE DESPACHO DE LA UNIDAD MOVIL
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
                                @{{ procesoImp.proceso3.codigo }}
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
                                REALIZÓ DESPACHO EFECTIVO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                <template v-if="procesoImp.proceso3.despacho_efectivo == '1'">
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
                                SE REALIZÓ DE MANERA OPORTUNA:
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                <template v-if="procesoImp.proceso3.oportuno == '1'">
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
                                HORA DE INDICACIÓN DE DESPACHO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso3.hora_indicacion }}
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
                                HORA DE SALIDA DE LA BASE
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso3.hora_salida_base }}
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
                                HORA DE LLEGADA AL FOCO DE EMERGENCIA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso3.hora_llegada }}
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
                                LA ATENCIÓN FUE
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso3.tipoAtencion.tipo }}
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
                                UBICACIÓN DEL FOCO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                DISTRITO: @{{ procesoImp.proceso3.distrito.nombre }} - PROVINCIA: @{{ procesoImp.proceso3.provincia.nombre }}
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
                                DIRECCIÓN REFERENCIAL
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso3.direccion }}
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
                                TIPO DE EMERGENCIA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                <template v-if="procesoImp.proceso3.tipo_emergencia == '1'">
                                    INDIVIDUAL
                                </template>
                                <template v-if="procesoImp.proceso3.tipo_emergencia == '2'">
                                    MASIVA
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
                                HORA DE SALIDA DEL FOCO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso3.hora_salida_foco }}
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
                                HORA DE REGRESO A LA BASE
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso3.hora_regreso_base }}
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
                                PERSONAL DE SAULD RESPONSABLE
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso3.personalResponsable.cargo.descripcion }}: @{{ procesoImp.proceso3.personalResponsable.nombres }} @{{ procesoImp.proceso3.personalResponsable.apellidos }}
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
                                @{{ procesoImp.proceso3.observaciones }}
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>




    


    

</div>

</div>
</div>