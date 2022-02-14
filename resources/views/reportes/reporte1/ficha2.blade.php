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
                                
                                <p style="margin-bottom: 0px;font-size: 19px"><strong>FICHA DE CONSEJERIA MEDICA TELEFONICA DE URGENCIA</strong></p>
                                
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
                                    I. DERIVACION DE LLAMADA
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
                                CODIGO DE ATENCION
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.codigo }}
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
                                HORA DE DERIVACIÓN DE LLAMADA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.hora }}
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
                                @{{ procesoImp.proceso2.personalResponsable.cargo.descripcion }}: @{{ procesoImp.proceso2.personalResponsable.nombres }} @{{ procesoImp.proceso2.personalResponsable.apellidos }}
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
                        <td class="title-imp" style="width: 18cm; padding-top: 5px;padding-bottom: 5px; text-align: center; border: 1px solid rgb(21, 21, 21); color: #FFF;background-color: rgb(0, 102, 204);">
                            <p class="title-imp-label" style="margin-bottom: 0px;font-size: 13px"><strong class="title-imp-label" style="padding-left: 8px;"> 
                                II. REGISTRO DEL PACIENTE
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
                                TIPO DE DOCUMENTO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.paciente.tipoDocumento.tipo }}
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
                                N° DE DOCUMENTO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.paciente.nro_documento }}
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
                                APELLIDOS
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.paciente.apellidos }}
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
                                NOMBRES
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.paciente.nombres }}
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
                                TIPO DE TELEFONO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                <template v-if="procesoImp.proceso2.paciente.tipo_telefono == '1'">
                                    FIJO
                                </template>
                                <template v-if="procesoImp.proceso2.paciente.tipo_telefono == '2'">
                                    CELULAR
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
                                N° DE TELEFONO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.paciente.telefono }}
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
                                GENERO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.paciente.genero }}
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
                                EDAD:
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                <template v-if="procesoImp.proceso2.paciente.tipo_edad == '1'">
                                    @{{ procesoImp.proceso2.paciente.edad }} AÑOS
                                </template>
                                <template v-if="procesoImp.proceso2.paciente.tipo_edad == '2'">
                                    @{{ procesoImp.proceso2.paciente.edad }} MESES
                                </template>
                                <template v-if="procesoImp.proceso2.paciente.tipo_edad == '3'">
                                    @{{ procesoImp.proceso2.paciente.edad }} DIAS
                                </template>
                                <template v-if="procesoImp.proceso2.paciente.tipo_edad == '4'">
                                    @{{ procesoImp.proceso2.paciente.edad }} HORAS
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
                                SEGURO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.paciente.seguro.descripcion }}
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
                        <td class="title-imp" style="width: 18cm; padding-top: 5px;padding-bottom: 5px; text-align: center; border: 1px solid rgb(21, 21, 21); color: #FFF;background-color: rgb(0, 102, 204);">
                            <p class="title-imp-label" style="margin-bottom: 0px;font-size: 13px"><strong class="title-imp-label" style="padding-left: 8px;"> 
                                III. ATENCION MEDICA TELEFONICA
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
                                PRIORIDAD DE EMERGENCIA PRESUNTIVA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.prioridad.codigo }} - @{{ procesoImp.proceso2.prioridad.prioridad }}
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
                                CODIGO DE DIAGNOSTICO PRESUNTIVO CIE - 10
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso2.cieDiagnostico.codigo }} - @{{ procesoImp.proceso2.cieDiagnostico.descripcion }}
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
                                REQUIERE DESPACHO DE UNIDAD MOVIL
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                <template v-if="procesoImp.proceso2.requiere_despacho == '1'">
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


 


    


    

</div>

</div>
</div>