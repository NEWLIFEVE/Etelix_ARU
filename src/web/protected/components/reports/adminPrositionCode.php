 <?php

    /**
     * @package reportes
     */
    class adminPrositionCode extends Reportes 
    {
        public static function report($ids,$name,$type) 
        {

            $positionCode = self::getModel($ids);
            if($positionCode != NULL){
                
                $table = "<h2 style='font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;letter-spacing: -1px;text-transform: uppercase;'>{$name}</h2>
                        <br>
                        <table class='table table-bordered table-striped table-condensed flip-content'>
                            <thead class='flip-content'>
                              <tr>
                                 <th class='fondotablesgris'>Nombre</th>
                                 <th class='fondotablesgris'>Apellido</th>
                                 <th class='fondotablesgris'>División</th>
                                 <th class='fondotablesgris'>Dependencia</th>
                                 <th class='fondotablesgris'>Posición</th>
                                 <th class='fondotablesgris'>Código de Posición</th>
                                 <th class='fondotablesgris'>Fecha de Inicio</th>
                                 <th class='fondotablesgris'>Fecha Fin</th>
                              </tr>
                           </thead>
                        .'<tbody>";
                foreach ($positionCode as $key => $registro) {

                    $table.=   "<tr>
                                   <td>".$registro->idEmployee->first_name."</td>
                                   <td>".$registro->idEmployee->last_name."</td>
                                   <td>".$registro->idDivision->name."</td>
                                   <td>".Division::getNameDivision($registro->id_dependency)."&nbsp</td>    
                                   <td>".$registro->idPosition->name."</td>
                                   <td>".$registro->position_code."</td>
                                   <td>".$registro->start_date."</td>
                                   <td>".$registro->end_date."&nbsp</td>
                                </tr>";

                }

                 $table.= '</tbody>
                        </table>';
            }else{
                $table='Hubo un error';
            }
            return $table;
        }
            
         
        public static function getModel($ids)
        {
            $modelPositionCode = PositionCode::model()->findAllBySql("SELECT pc.id, pc.position_code, pc.id_position, pc.id_division, d.id_dependency, pc.id_employee, pc.start_date, pc.end_date
                                                                      FROM position_code pc
                                                                      INNER JOIN division as d ON d.id = pc.id_division
                                                                      INNER JOIN position as p ON p.id = pc.id_position
                                                                      INNER JOIN employee as e ON e.id = pc.id_employee
                                                                      WHERE pc.id IN ($ids)
                                                                      ORDER BY pc.position_code ASC;");

            return $modelPositionCode;

        }

    }
    ?>