<div class="">
                   <br><br> 
                   <b > &nbsp;&nbsp;&nbsp;If available percentage is greater than Border Line data then you may get the room </b>
                   <div style="margin-top:-20px; overflow: hidden;">
                    <table class="table table-bordered  table-hover table-responsive table-hover" style="background-color: #ffffff">
                        <thead>
                            <tr>
                                <th>
                                    Room Type
                                </th>
                                <th>
                                    Block
                                </th>
                                <th>
                                    Availability percentage
                                </th>
                                <th>
                                    Border Line
                                </th>
                                <th>
                                    Available
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1 Bed AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U1A[0]; ?>
                                </td>
                                <td>
                                    <?php echo $A1A_MI[0]; ?>
                                </td>
                                <td>
                                    
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    1 Bed AC
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U1A[1]; ?>
                                </td>
                                <td>
                                    <?php echo $A1A_MI[1] ?>
                                </td>
                                                                <td>
                                    <?php
                                    if($U1A[1] >= $A1A_MI[1]){
                                        echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';      

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    1 Bed AC
                                </td>
                                <td>
                                    D
                                </td>
                                <td>
                                    <?php echo $U1A[2]; ?>
                                </td>
                                <td>
                                    <?php echo $A1A_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1A[2] >= $A1A_MI[2]){
                                        echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';
                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                                

                            </tr>
                            <tr>
                                <td>
                                    1 Bed AC
                                </td>
                                <td>
                                    G
                                </td>
                                <td>
                                    <?php echo $U1A[3]; ?>
                                </td>
                                <td>
                                    <?php echo $A1A_MI[3] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1A[3] >= $A1A_MI[3]){
                                    echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    1 Bed AC
                                </td>
                                <td>
                                    J
                                </td>
                                <td>
                                    <?php echo $U1A[4]; ?>
                                </td>
                                <td>
                                    <?php echo $A1A_MI[4] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1A[4] >= $A1A_MI[4]){
                                                                                
                                        echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1 Bed AC
                                </td>
                                <td>
                                    H
                                </td>
                                <td>
                                    <?php echo $U1A[5]; ?>
                                </td>
                                <td>
                                    <?php echo $A1A_MI[5] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1A[5] >= $A1A_MI[5]){
                                                                                echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    1 Bed Non-AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U1NA[0]; ?>
                                </td>
                                <td>
                                    <?php echo $A1NA_MI[0] ?>
                                </td>
                                <td>
                                   
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1 Bed Non-AC
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U1NA[1]; ?>
                                </td>
                                <td>
                                    <?php echo $A1NA_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1NA[1] >= $A1NA_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1 Bed Non-AC
                                </td>
                                <td>
                                    D
                                </td>
                                <td>
                                    <?php echo $U1NA[2]; ?>
                                </td>
                                <td>
                                    <?php echo $A1NA_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1NA[2] >= $A1NA_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1 Bed Non-AC
                                </td>
                                <td>
                                    G
                                </td>
                                <td>
                                    <?php echo $U1NA[3]; ?>
                                </td>
                                <td>
                                    <?php echo $A1NA_MI[3] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1NA[3] >= $A1NA_MI[3]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1 Bed Non-AC
                                </td>
                                <td>
                                    J
                                </td>
                                <td>
                                    <?php echo $U1NA[4]; ?>
                                </td>
                                <td>
                                    <?php echo $A1NA_MI[4] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1NA[4] >= $A1NA_MI[4]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    1 Bed Non-AC
                                </td>
                                <td>
                                    H
                                </td>
                                <td>
                                    <?php echo $U1NA[5]; ?>
                                </td>
                                <td>
                                    <?php echo $A1NA_MI[5] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U1NA[5] >= $A1NA_MI[5]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    2 Bed AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U2A[0]; ?>
                                </td>
                                
                                <td>
                                    <?php echo $A2A_MI[0] ?>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2 Bed AC
                                </td>
                                <td>
                                    E
                                </td>
                                <td>
                                    <?php echo $U2A[1]; ?>
                                </td>
                                
                                <td>
                                    <?php echo $A2A_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U2A[1] >= $A2A_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2 Bed AC
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U2A[2]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A2A_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U2A[2] >= $A2A_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2 Bed AC
                                </td>
                                <td>
                                    F
                                </td>
                                <td>
                                    <?php echo $U2A[3]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A2A_MI[3] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U2A[3] >= $A2A_MI[3]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    2 Bed Non-AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U2NA[0]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A2NA_MI[0] ?>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2 Bed Non-AC
                                </td>
                                <td>
                                    A
                                </td>
                                <td>
                                    <?php echo $U2NA[1]; ?>
                                </td>                                
                                <td>
                                    <?php echo $A2NA_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U2NA[1] >= $A2NA_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2 Bed Non-AC
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U2NA[2]; ?>
                                </td>
                                <td>
                                    <?php echo $A2NA_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U2NA[2] >= $A2NA_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>                           </tr>
                            <tr>
                                <td>
                                    2 Bed Non-AC
                                </td>
                                <td>
                                    E
                                </td>
                                <td>
                                    <?php echo $U2NA[3]; ?>
                                </td>
                                <td>
                                    <?php echo $A2NA_MI[3] ?>
                                </td>
                                                               <td>
                                    <?php
                                    if($U2NA[3] >= $A2NA_MI[3]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2 Bed Non-AC
                                </td>
                                <td>
                                    C
                                </td>
                                <td>
                                    <?php echo $U2NA[4]; ?>
                                </td>
                                <td>
                                    <?php echo $A2NA_MI[4] ?>
                                </td>
                                                               <td>
                                    <?php
                                    if($U2NA[4] >= $A2NA_MI[4]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2 Bed Non-AC
                                </td>
                                <td>
                                    F
                                </td>
                                <td>
                                    <?php echo $U2NA[5]; ?>
                                </td>
                                <td>
                                    <?php echo $A2NA_MI[5] ?>
                                </td>
                                                               <td>
                                    <?php
                                    if($U2NA[5] >= $A2NA_MI[5]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    3 Bed AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U3A[0]; ?>
                                </td>
                                <td>
                                    <?php echo $A3A_MI[0] ?>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3 Bed AC
                                </td>1
                                <td>
                                    D Annexe
                                </td>
                                <td>
                                    <?php echo $U3A[1]; ?>
                                </td>
                                <td>
                                    <?php echo $A3A_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U3A[1] >= $A3A_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3 Bed AC
                                </td>
                                <td>
                                    B
                                </td>
                                <td>
                                    <?php echo $U3A[2]; ?>
                                </td>
                                <td>
                                    <?php echo $A3A_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U3A[2] >= $A3A_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    3 Bed Non-AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U3NA[0]; ?>
                                </td>
                                <td>
                                    <?php echo $A3NA_MI[0] ?>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3 Bed Non-AC
                                </td>
                                <td>
                                    D Annexe
                                </td>
                                <td>
                                    <?php echo $U3NA[1]; ?>
                                </td>
                                <td>
                                    <?php echo $A3NA_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U3NA[1] >= $A3NA_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3 Bed Non-AC
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U3NA[2]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A3NA_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U3NA[2] >= $A3NA_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3 Bed Non-AC
                                </td>
                                <td>
                                    H
                                </td>
                                <td>
                                    <?php echo $U3NA[3]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A3NA_MI[3] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U3NA[3] >= $A3NA_MI[3]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3 Bed Non-AC
                                </td>
                                <td>
                                    J
                                </td>
                                <td>
                                    <?php echo $U3NA[4]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A3NA_MI[4] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U3NA[4] >= $A3NA_MI[4]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3 Bed Non-AC
                                </td>
                                <td>
                                    B
                                </td>
                                <td>
                                    <?php echo $U3NA[5]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A3NA_MI[5] ?>
                                </td>
                                                                <td>
                                    <?php
                                    if($U3NA[5] >= $A3NA_MI[5]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>                            
                            
                            <tr>
                                <td>
                                    4 Bed AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U4A[0]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A4A_MI[0] ?>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed AC
                                </td>
                                <td>
                                    D Annexe
                                </td>
                                <td>
                                    <?php echo $U4A[1]; ?>
                                </td>              <td>
                                    <?php echo $A4A_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4A[1] >= $A4A_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed AC
                                </td>
                                <td>
                                    G
                                </td>
                                <td>
                                    <?php echo $U4A[2]; ?>
                                </td>              <td>
                                    <?php echo $A4A_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4A[2] >= $A4A_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed AC
                                </td>
                                <td>
                                    A
                                </td>
                                <td>
                                    <?php echo $U4A[3]; ?>
                                </td>              <td>
                                    <?php echo $A4A_MI[3] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4A[3] >= $A4A_MI[3]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed AC
                                </td>
                                <td>
                                    K
                                </td>
                                <td>
                                    <?php echo $U4A[4]; ?>
                                </td>              <td>
                                    <?php echo $A4A_MI[4] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4A[4] >= $A4A_MI[4]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed AC
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U4A[5]; ?>
                                </td>              <td>
                                    <?php echo $A4A_MI[5] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4A[5] >= $A4A_MI[5]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>                            
                            
                            <tr>
                                <td>
                                    4 Bed Non-AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U4NA[0]; ?>
                                </td>              <td>
                                    <?php echo $A4NA_MI[0] ?>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed Non-AC
                                </td>
                                <td>
                                    D Annexe
                                </td>
                                <td>
                                    <?php echo $U4NA[1]; ?>
                                </td><td>
                                    <?php echo $A4NA_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4NA[1] >= $A4NA_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed Non-AC
                                </td>
                                <td>
                                    A
                                </td>
                                <td>
                                    <?php echo $U4NA[2]; ?>
                                </td><td>
                                    <?php echo $A4NA_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4NA[2] >= $A4NA_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed Non-AC
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U4NA[3]; ?>
                                </td>
                                <td>
                                    <?php echo $A4NA_MI[3] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4NA[3] >= $A4NA_MI[3]){
                                                                                echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed Non-AC
                                </td>
                                <td>
                                    K
                                </td>
                                <td>
                                    <?php echo $A4NA_MI[4] ?>
                                </td>
                                
                                <td>
                                    <?php echo $A4NA_MI[4] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4NA[4] >= $A4NA_MI[4]){
                                    echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';    

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed Non-AC
                                </td>
                                <td>
                                    G
                                </td>
                                <td>
                                    <?php echo $U4NA[5]; ?>
                                </td><td>
                                    <?php echo $A4NA_MI[5] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4NA[5] >= $A4NA_MI[5]){
                                    echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';    

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed Non-AC
                                </td>
                                <td>
                                    C
                                </td>
                                <td>
                                    <?php echo $U4NA[6]; ?>
                                </td><td>
                                    <?php echo $A4NA_MI[6] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4NA[6] >= $A4NA_MI[6]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    4 Bed Non-AC
                                </td>
                                <td>
                                    F
                                </td>
                                <td>
                                    <?php echo $U4NA[7]; ?>
                                </td>
                                <td>
                                    <?php echo $A4NA_MI[7] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U4NA[7] >= $A4NA_MI[7]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    6 Bed AC
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U6A[0]; ?>
                                </td>
                                <td>
                                    <?php echo $A6A_MI[0] ?>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6 Bed AC
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U6A[1]; ?>
                                </td>                                <td>
                                    <?php echo $A6A_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6A[1] >= $A6A_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6 Bed AC
                                </td>
                                <td>
                                    K
                                </td>
                                <td>
                                    <?php echo $U6A[2]; ?>
                                </td>                                <td>
                                    <?php echo $A6A_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6A[2] >= $A6A_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6 Bed AC
                                </td>
                                <td>
                                    F
                                </td>
                                <td>
                                    <?php echo $U6A[3]; ?>
                                </td>                                <td>
                                    <?php echo $A6A_MI[3] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6A[3] >= $A6A_MI[3]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            
                            <tr>
                                <td>
                                    6 Bed Non-AC
                                
                                </td>
                                <td>
                                    ALL
                                </td>
                                <td>
                                    <?php echo $U6NA[0]; ?>
                                </td>
                                                                <td>
                                    <?php echo $A6NA_MI[0] ?>
                                </td>
                                <td>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6 Bed Non-AC
                                
                                </td>
                                <td>
                                    L
                                </td>
                                <td>
                                    <?php echo $U6NA[1]; ?>
                                </td>
                                <td>
                                    <?php echo $A6NA_MI[1] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6NA[1] >= $A6NA_MI[1]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    6 Bed Non-AC
                                </td>
                                <td>
                                    K
                                </td>
                                <td>
                                    <?php echo $U6NA[2]; ?>
                                </td>
                                <td>
                                    <?php echo $A6NA_MI[2] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6NA[2] >= $A6NA_MI[2]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6 Bed Non-AC
                                </td>
                                <td>
                                    A
                                </td>
                                <td>
                                    <?php echo $U6NA[3]; ?>
                                </td>
                                <td>
                                    <?php echo $A6NA_MI[3] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6NA[3] >= $A6NA_MI[3]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    6 Bed Non-AC
                                </td>
                                <td>
                                    F
                                </td>
                                <td>
                                    <?php echo $U6NA[4]; ?>
                                </td>
                                <td>
                                    <?php echo $A6NA_MI[4] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6NA[4] >= $A6NA_MI[4]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>                            </tr>
                            <tr>
                                <td>
                                    6 Bed Non-AC
                                </td>
                                <td>
                                    H
                                </td>
                                <td>
                                    <?php echo $U6NA[5]; ?>
                                </td>
                                <td>
                                    <?php echo $A6NA_MI[5] ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6NA[5] >= $A6NA_MI[5]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>                            
                            </tr>
                            <tr>
                                <td>
                                    6 Bed Non-AC
                                </td>
                                <td>
                                    J
                                </td>
                                <td>
                                    <?php echo $U6NA[5]; ?>
                                </td><td>
                                    <?php echo $A6NA_MI[6]; ?>
                                </td>
                                <td>
                                    <?php
                                    if($U6NA[5] >= $A6NA_MI[6]){
echo '<i style="text-align:center; color:green" class="fa fa-check" aria-hidden="true"></i>';                                        

                                    }else{
                                        echo '<span style="text-align:center; color:red" > May Be </span>';
                                    } ?>
                                </td>                                
                            </tr>
                        </tbody>
                    </table>
                   </div>
                </div>
