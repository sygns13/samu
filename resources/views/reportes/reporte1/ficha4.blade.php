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
                                
                                <p style="margin-bottom: 0px;font-size: 19px"><strong>FICHA DE ASISTENCIA MÉDICA EN FOCO</strong></p>
                                
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
                                    INFORMACION PRELIMINAR
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
                                @{{ procesoImp.proceso4.codigo }}
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
                                I. DATOS DEL PACIENTE
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
                            @{{ procesoImp.proceso4.paciente.tipoDocumento.tipo }}
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
                            @{{ procesoImp.proceso4.paciente.nro_documento }}
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
                            @{{ procesoImp.proceso4.paciente.apellidos }}
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
                            @{{ procesoImp.proceso4.paciente.nombres }}
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
                            <template v-if="procesoImp.proceso4.paciente.tipo_telefono == '1'">
                                FIJO
                            </template>
                            <template v-if="procesoImp.proceso4.paciente.tipo_telefono == '2'">
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
                            @{{ procesoImp.proceso4.paciente.telefono }}
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
                            @{{ procesoImp.proceso4.paciente.genero }}
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
                            <template v-if="procesoImp.proceso4.paciente.tipo_edad == '1'">
                                @{{ procesoImp.proceso4.paciente.edad }} AÑOS
                            </template>
                            <template v-if="procesoImp.proceso4.paciente.tipo_edad == '2'">
                                @{{ procesoImp.proceso4.paciente.edad }} MESES
                            </template>
                            <template v-if="procesoImp.proceso4.paciente.tipo_edad == '3'">
                                @{{ procesoImp.proceso4.paciente.edad }} DIAS
                            </template>
                            <template v-if="procesoImp.proceso4.paciente.tipo_edad == '4'">
                                @{{ procesoImp.proceso4.paciente.edad }} HORAS
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
                            @{{ procesoImp.proceso4.paciente.seguro.descripcion }}
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
                            II. ANTECEDENTES
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
                                PATOLOGIA PREVIA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.antecedente.patologia_previa }}
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
                                MEDICACIÓN
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.antecedente.medicacion }}
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
                                ALERGIAS
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.antecedente.alergias }}
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
                                F.U.R. (Día/Mes/Año)
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.antecedente.fur | pasfechaVista }}
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
                                FORMULA OBSTERICA
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                G: @{{ procesoImp.proceso4.antecedente.gestacion }} P: @{{ procesoImp.proceso4.antecedente.parto }} A: @{{ procesoImp.proceso4.antecedente.aborto }}
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
                                III. ENFERMEDAD ACTUAL
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
                                TIEMPO ENFERMEDAD
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.enfermedadActual.tiempo }}
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
                                INICIO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.enfermedadActual.inicio }}
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
                                CURSO
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.enfermedadActual.curso }}
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
                                EVENTO Y SINTOMAS
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.enfermedadActual.sintomas }}
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
                                IV. RELATO DEL EVENTO
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
                                OBSERVACIONES
                            </strong>:</p>
                        </td>

                        <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                            <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                                @{{ procesoImp.proceso4.relato_evento }}
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
                                V. EXAMEN FÍSICO
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
                            FC
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.fc }}
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
                            FR
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.fr }}
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
                            P/A
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.pa }}
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
                            100/80 Tº
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.temperatura }}
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
                            SAT O2
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.saturacion }}
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
                            GLICEMIA
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.glicemia }}
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
                            GLASGOW R. Ocular
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.ocular }}
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
                            GLASGOW R. Verbal
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.verbal }}
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
                            GLASGOW R. Motora
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.motora }}
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
                            PIEL Y MUCOSAS
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.piel_check1 }}
                            @{{ procesoImp.proceso4.examenPreferencial.piel_check2 }}
                            @{{ procesoImp.proceso4.examenPreferencial.piel_check2 }}
                            @{{ procesoImp.proceso4.examenPreferencial.piel_check3 }}
                            @{{ procesoImp.proceso4.examenPreferencial.piel_check4 }}
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
                            CABEZA Y CUELLO: Pupilas (mm)
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.pupilas }}
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
                            CABEZA Y CUELLO:
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.cabeza_check1 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cabeza_check2 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cabeza_check3 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cabeza_check4 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cabeza_check5 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cabeza_check6 }}
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
                            TORAX Y PULMONES
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.torax_check1 }}
                            @{{ procesoImp.proceso4.examenPreferencial.torax_check2 }}
                            @{{ procesoImp.proceso4.examenPreferencial.torax_check3 }}
                            @{{ procesoImp.proceso4.examenPreferencial.torax_check4 }}
                            @{{ procesoImp.proceso4.examenPreferencial.torax_check5 }}
                            @{{ procesoImp.proceso4.examenPreferencial.torax_check6 }}
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
                            CARDIOVASCULAR
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.cardiovascular_check1 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cardiovascular_check2 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cardiovascular_check3 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cardiovascular_check4 }}
                            @{{ procesoImp.proceso4.examenPreferencial.cardiovascular_obs }}
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
                            ABDOMEN
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.abdomen_check1 }}
                            @{{ procesoImp.proceso4.examenPreferencial.abdomen_check2 }}
                            @{{ procesoImp.proceso4.examenPreferencial.abdomen_check3 }}
                            @{{ procesoImp.proceso4.examenPreferencial.abdomen_check4 }}
                            @{{ procesoImp.proceso4.examenPreferencial.abdomen_check5 }}
                            @{{ procesoImp.proceso4.examenPreferencial.abdomen_check6 }}
                            @{{ procesoImp.proceso4.examenPreferencial.abdomen_otros }}
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>













<template v-if="procesoImp.proceso4.es_gestante == '1'">

    <div style="width: 18cm;"> 
        <table>
            <tbody>
                <tr>
                    <td style="width: 18cm; padding-top: 5px;paddm: 5px; text-align: center; border: 1px solid rgb(21, 21, 21); color: rgb(0, 0, 0);background-color: rgb(255, 204, 102);">
                        <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                            GESTANTE
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
                            AU
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.au }}
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
                            FCF
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.fcf }}
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
                            MF
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.mf }}
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
                            SITUACION
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.situacion }}
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
                            PRESENTACION
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.presentacion }}
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
                            POSICION
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.posicion }}
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
                            MO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.mo }}
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
                            DU: D
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.du }}
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
                            I
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.i }}
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
                            F
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.f }}
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
                            TV: Dilatacón
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.dilatacion }}
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
                            B
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.b }}
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
                            AP
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.ap }}
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
                            PLA
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.pla }}
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
                            GENITOURINARIO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.gestante.genitourinario_check1 }}
                            @{{ procesoImp.proceso4.gestante.genitourinario_check2 }}
                            @{{ procesoImp.proceso4.gestante.genitourinario_check3 }}
                            @{{ procesoImp.proceso4.gestante.genitourinario_check4 }}
                            @{{ procesoImp.proceso4.gestante.genitourinario_check5 }}
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
                            LOCOMOTOR
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.locomotor_check1 }}
                            @{{ procesoImp.proceso4.examenPreferencial.locomotor_check2 }}
                            @{{ procesoImp.proceso4.examenPreferencial.locomotor_check3 }}
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
                            NEUROLOGICO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.neurologico_check1 }}
                            @{{ procesoImp.proceso4.examenPreferencial.neurologico_check2 }}
                            @{{ procesoImp.proceso4.examenPreferencial.neurologico_check3 }}
                            @{{ procesoImp.proceso4.examenPreferencial.neurologico_check4 }}
                            @{{ procesoImp.proceso4.examenPreferencial.neurologico_check5 }}
                            @{{ procesoImp.proceso4.examenPreferencial.neurologico_check6 }}
                            @{{ procesoImp.proceso4.examenPreferencial.neurologico_check7 }}
                            @{{ procesoImp.proceso4.examenPreferencial.neurologico_check8 }}
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
                            OTROS - EXAMEN PREFERENCIAL
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.examenPreferencial.otros }}
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>



</template>












<div style="width: 18cm;"> 
    <table>
        <tbody>
            <tr>
                <td class="title-imp" style="width: 18cm; padding-top: 5px;padding-bottom: 5px; text-align: center; border: 1px solid rgb(21, 21, 21); color: #FFF;background-color: rgb(0, 102, 204);">
                    <p class="title-imp-label" style="margin-bottom: 0px;font-size: 13px"><strong class="title-imp-label" style="padding-left: 8px;"> 
                        VI. MECANISMOS DE LESIÓN
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
                            TIPO DE ACCIDENTE
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.tipo_accidente }}
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
                            VEHÍCULO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.vehiculo }}
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
                            L. IMPACTO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.impacto }}
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
                            PERSONA AFECTADA
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.persona_afectada }}
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
                            MECANISMOS DE PROTECCIÓN
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.proteccion_check1 }}
                            @{{ procesoImp.proceso4.mecanismosLesion.proteccion_check2 }}
                            @{{ procesoImp.proceso4.mecanismosLesion.proteccion_check3 }}
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
                            SITUACIÓN
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.situacion_check1 }}
                            @{{ procesoImp.proceso4.mecanismosLesion.situacion_check2 }}
                            @{{ procesoImp.proceso4.mecanismosLesion.situacion_check3 }}
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
                            AGRESIÓN
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.agrecion }}
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
                            AHOGAMIENTO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.ahogamiento }}
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
                            CAÍDA DE ALTURA - METROS
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.caida_altura }}
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
                            QUEMADURAS - %
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.quemaduras }}
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
                            %SC TIPO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.sc_tipo }}
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
                            GRADO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.mecanismosLesion.grado_check1 }}
                            @{{ procesoImp.proceso4.mecanismosLesion.grado_check2 }}
                            @{{ procesoImp.proceso4.mecanismosLesion.grado_check3 }}
                            @{{ procesoImp.proceso4.mecanismosLesion.grado_check4 }}
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
                            VII. DIAGNÓSTICO
                        </strong></p>
                    </td>            
             </tr>
         </tbody>
     </table>
    </div>


<template v-for="(diagnostico, index) in procesoImp.proceso4.diagnosticos">

     <div style="width: 18cm;"> 
        <table>
            <tbody>
                <tr>
                    <td style="width: 5.6cm; text-align: center; border: 1px;border-style: solid">
                        <p style="margin-bottom: 0px;font-size: 13px"><strong style="padding-left: 8px;"> 
                            DIAGNOSTICO @{{ index + 1 }}
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ diagnostico.cie10 }} - @{{ diagnostico.descripcion }}
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</template>

















<div style="width: 18cm;"> 
    <table>
        <tbody>
            <tr>
                <td class="title-imp" style="width: 18cm; padding-top: 5px;padding-bottom: 5px; text-align: center; border: 1px solid rgb(21, 21, 21); color: #FFF;background-color: rgb(0, 102, 204);">
                    <p class="title-imp-label" style="margin-bottom: 0px;font-size: 13px"><strong class="title-imp-label" style="padding-left: 8px;"> 
                        VIII. PROCEDIMIENTO Y TRATAMIENTO
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
                            OXIGENOTERAPIA: Con
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.tratamiento.oxigenoterapia }}
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
                            Flujo
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.tratamiento.flujo }}
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
                            FLUIDOTERAPIA: Con
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.tratamiento.fluidoterapia }}
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
                            A
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.tratamiento.fluidoterapia_a }}
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
                            MEDICAMENTOS-DOSIS
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.tratamiento.medicamentos }}
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
                            VIA
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.tratamiento.via }}
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
                            @{{ procesoImp.proceso4.tratamiento.hora }}
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
                            PROCEDIMIENTOS
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.procedimiento.proc_check1 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check2 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check3 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check4 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check5 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check6 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check7 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check8 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check9 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check10 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check11 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check12 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check13 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check14 }}
                            @{{ procesoImp.proceso4.procedimiento.proc_check15 }}
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
                            IX. OCURRENCIAS DURANTE LA ATENCIÓN
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
                            RELATO DE LA OCURRENCIA
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.ocurrencias_atencion }}
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
                            X. RESPONSABLES DE LA ATENCIÓN
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
                            MÉDICO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.medico.cargo.descripcion }}: @{{ procesoImp.proceso4.medico.nombres }} @{{ procesoImp.proceso4.medico.apellidos }}
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
                            ENFERMERA
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.enfermera.cargo.descripcion }}: @{{ procesoImp.proceso4.enfermera.nombres }} @{{ procesoImp.proceso4.enfermera.apellidos }}
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
                            XI. ESTABLECIMIENTO DE SALUD DESTINO
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
                            REQUIRIÓ TRASLADO A UNA IPRESS SALUD
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            <template v-if="procesoImp.proceso4.requirio_traslado == '1'">
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
                            HORA DE LLEGADA AL ESTABLECIMIENTO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.establecimientoDestino.hora_llegada }}
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
                            ESTABLECIMIENTO DE SALUD
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.establecimientoDestino.establecimiento }}
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
                            CATEGORÍA
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.establecimientoDestino.categoria }}
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
                            HORA DE RECEPCIÓN DEL PACIENTE
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.establecimientoDestino.hora_recepcion }}
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
                            PROFESIONAL QUE ACEPTA
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.establecimientoDestino.profesional_acepta }}
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
                            HORA DE SALIDA DEL ESTABLECIMIENTO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.establecimientoDestino.hora_salida }}
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
                            XII. RESPONSABLE DEL PACIENTE
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
                            @{{ procesoImp.proceso4.responsablePaciente.tipoDocumento.tipo }}
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
                            @{{ procesoImp.proceso4.responsablePaciente.nro_documento }}
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
                            APELLIDOS Y NOMBRES
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.responsablePaciente.apellidos_nombres }}
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
                            PARENTESCO
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.responsablePaciente.parentesco }}
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
                            PERTENENCIAS DEL PACIENTE
                        </strong>:</p>
                    </td>

                    <td style="width: 70%;text-align: center;padding-top: 5px;padding-bottom: 5px;border: 1px;border-style: solid;">            
                        <p  id="impArea" style="margin-bottom: 0px;font-size: 14px;text-align: justify;padding-left: 10px;padding-right: 10px;">
                            @{{ procesoImp.proceso4.responsablePaciente.pertenencias_paciente }}
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>






    


    

</div>

</div>
</div>