<?php 



function as_getToken(){
        
    $post_data = 'grant_type=password&client_id=e080692f-463c-45dc-9d33-0c51568474f2&username=API&password=@x@9aV8rV5';

    $crl = curl_init('https://database.sa-intl.org/api/v0/token');
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($crl, CURLINFO_HEADER_OUT, true);
    curl_setopt($crl, CURLOPT_POST, true);
    curl_setopt($crl, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($crl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded'
    ));
        
    $result = curl_exec($crl);
    curl_close($crl);
    $result = json_decode($result);
    return $result->access_token;
}

function as_getResults($url){

    $token = as_getToken();

    $ch = curl_init($url);  
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLINFO_HEADER_OUT, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Bearer ' . $token . '',
        'Content-Type: application/json'
    )); 
 
    $output=curl_exec($ch);
 
    curl_close($ch);
    $output = json_decode($output);
    return $output;
}

function cwp_create_json($key, $value){
    if(isset($value)){
        if (strpos($value, 'T0') !== false && $key !== 'Certificate ID number') {
            $time = explode('T0', $value);
            $jsonString = '"' . $key . '":"' . $time[0] . '",'; 
        } else {
            $val = str_replace('"', '', $value);
            $jsonString ='"' . $key . '":"' . $val . '",';
        }
    } else {
        $jsonString ='"' . $key . '":"",';
    } 

    return $jsonString;
}

function cwp_create_table($value){
    if(isset($value)){
        $tr = '<td>' . $value . '</td>';
    } else {
        $tr = '<td></td>';
    }

    return $tr;
}

function exportLabelArray($s){
    return array(
        "Certification Body" => !($s->CB) ? '' : $s->CB ,
        "Certificate ID number" => !($s->Certificate_ID_number) ? '' : $s->Certificate_ID_number,
        "Name of Certified Organization" => !($s->Organization) ? '' : str_replace('"', '', $s->Organization) ,
        "Organization address" => !($s->Organization_address) ? '' : str_replace('"', '', $s->Organization_address) ,
        "Organization city" => !($s->Organization_city) ? '' : $s->Organization_city ,
        "Organization state" => !($s->Organization_State) ? '' : $s->Organization_State ,
        "Organization zip" => !($s->Organization_Zip) ? '' : $s->Organization_Zip ,
        "Organization country" => !($s->Organization_country) ? '' : $s->Organization_country ,
        "Scope of Certification" => !($s->Description_of_Operations) ? '' : str_replace('"', '', $s->Description_of_Operations) ,
        "Industry" => !($s->Industry) ? '' : $s->Industry ,
        "Number of sites" => !($s->Number_of_sites) ? '' : $s->Number_of_sites ,
        "Certification status" => !($s->Certification_status) ? '' : $s->Certification_status ,
        "Date on initial certification" => !($s->Date_on_initial_certification) ? '' : $s->Date_on_initial_certification ,
        "Latest Certification Date" => !($s->Certification_date) ? '' : $s->Certification_date , 
        "Cycle" => !($s->Cycle) ? '' : $s->Cycle ,
        "Expiration date" => !($s->Date_of_expiry) ? '' : $s->Date_of_expiry , 
        // "Date of upgrade to SA8000 2014" => !($s->Date_of_upgrade_to_SA8000_2014) ? '' : $s->Date_of_upgrade_to_SA8000_2014 ,
        "Previously certified by another CB?" => !($s->Previously_certified_by_another_CB) ? '' : $s->Previously_certified_by_another_CB ,
        "Transfer from CB" => !($s->Transfer_from_CB) ? '' : $s->Transfer_from_CB ,
        "Date of transfer" => !($s->Date_of_transfer) ? '' : $s->Date_of_transfer ,
        // "Transfer reason" => !($s->Transfer_reason) ? '' : $s->Transfer_reason , 
        "Suspended from" => !($s->Suspended_from) ? '' : $s->Suspended_from ,
        "Suspended until" => !($s->Suspended_until) ? '' : $s->Suspended_until , 
        // "Reason for suspension" => !($s->Reason_for_suspension) ? '' : $s->Reason_for_suspension , 
        // "Suspension explanation" => !($s->Suspension_explanation) ? '' : $s->Suspension_explanation ,
        "Withdrawal date" => !($s->Withdrawal_date) ? '' : $s->Withdrawal_date ,
        // "Withdrawal reason" => !($s->Withdrawal_reason) ? '' : $s->Withdrawal_reason 
    );
}

function cwp_get_results(){

    if($_GET){

        $url = 'https://database.sa-intl.org/api/v0/custom/certification?';

        if($_GET["Country"]){
            $url .= 'Country=' . str_replace(' ', '%20', $_GET["Country"]) . '&';
        }
        if($_GET["Industry"]){
            $url .= 'Industry=' . str_replace(' ', '%20', $_GET["Industry"]) . '&'; 
        }
        if($_GET["Certification_status"]){
            $url .= 'Certification_status=' . str_replace(' ', '%20', $_GET["Certification_status"]) . '&';
        }
        if($_GET["Certified_Organization"]){
            $url .= 'Certified_Organization=' . str_replace(' ', '%20', $_GET["Certified_Organization"]) . '&';
        }
        if($_GET["Certification_ID"]){
            $url .= 'Certificate_ID=' . str_replace(' ', '%20', $_GET["Certification_ID"]) . '&';
        }
        if($_GET["Description_of_Operations"]){
            $url .= 'Description_of_Operations=' . str_replace(' ', '%20', $_GET["Description_of_Operations"]) . '&';
        }
        if($_GET["CB"]){
            $url .= 'CB=' . str_replace(' ', '%20', $_GET["CB"]) . '&';
        }
        if($_GET["City"]){
            $url .= 'City=' . str_replace(' ', '%20', $_GET["City"]);
        }

        if(substr($url, -1) === '&'){
            $url = substr_replace($url ,"",-1);
        };

        if(substr($url, -1) === '?'){
            $url = substr_replace($url ,"",-1);
        };


        $results = as_getResults($url);

        if(isset($results)){
            // echo '<pre>'; var_dump($results); echo '</pre>';
            if(isset($results->httpStatusCode)){
                echo '<p>Something went wrong. Please try again later!';
            } else {

                $pages = array();
                $jsonString = '[';

                foreach($results as $result){
                    $tr = '';
                    $popup = '';
                        
                    foreach($result as $key => $r){
                        if(is_int($key)){
                            if(is_int($key)){
                                $nr = $key + 1;
                                $nr = $nr / 20;
                            }
                            
                            if(is_int($nr)){
                                $noPg = $nr;
                            }
                            if($nr > $noPg){
                                $noPg = $noPg + 1;
                            }

                            array_push($pages, $noPg);
                            // var_dump($noPg);
                            // echo "<pre>"; var_dump($r); echo '</pre>';
                            if($noPg === 1){
                                $first = 'display';
                            } else {
                                $first ='';
                            }
                            $popup .= '<div class="popup popup-' . $key . '"><span>×</span><div><ul>';
                            $tr .= '<tr class="pages page-' . $noPg . ' ' . $first . '">';
                            $jsonString .= '{';

                            

                            $resultsList = array(
                                $r->Organization, 
                                $r->CB,
                                $r->Certificate_ID_number,
                                $r->Certification_status,
                                $r->Industry  
                            );

                            $exportLabelArray = exportLabelArray($r);
                            
                            foreach($exportLabelArray as $label => $result){
                                $jsonString .= cwp_create_json($label, $result);
                            }

                            foreach($resultsList as $theResults){
                                $tr .= cwp_create_table($theResults);
                            }
                            
                            $tr .= '<td><a href="" class="ab-button ab-button-shape-rounded" data-pop="popup-' . $key . '">More Info</a></td>';
                            
                            if(isset($r->Organization)){
                                $popup .= '<li><b>Certified Organization: </b>' . $r->Organization . '</li>';
                            } else {
                                $popup .= '';
                            }
                            
                            
                            if(isset($r->CB)){
                                $popup .= '<li><b>Certification Body:</b> ' . $r->CB . '</li>';
                            } else {
                                $popup .= '';
                            }
                            
                            if(isset($r->Organization_city)){
                                $oCity = ', ' . $r->Organization_city;
                            } else {
                                $oCity = '';
                            }
                            
                            if(isset($r->Organization_State)){
                                $oState = ', ' . $r->Organization_State;
                            } else {
                                $oState = '';
                            }
                            
                            if(isset($r->Organization_Zip)){
                                $oZip = ', ' . $r->Organization_Zip;
                            } else {
                                $oZip = '';
                            }
                            
                            if(isset($r->Organization_country)){
                                $oCountry = ', ' . $r->Organization_country;
                            } else {
                                $oCountry = '';
                            }
                            
                            
                            if(isset($r->Certificate_ID_number)){
                                $popup .= '<li><b>Certificate ID number:</b> ' . $r->Certificate_ID_number . '</li>';
                            } else {
                                $popup .= '';
                            }
                            
                            if(isset($r->Certification_status)){
                                $popup .= '<li><b>Certification status:</b> ' . $r->Certification_status . '</li>';
                            
                                if($r->Certification_status === 'Suspended'){
                                    if(isset($r->Suspended_from)){
                                        $sf = explode('T', $r->Suspended_from);
                                        $sf = $sf[0];
                                        $popup .= '<li><b>Suspended from:</b> ' . $sf . '</li>';
                                    } 
                                    if(isset($r->Suspended_until)){
                                        $su = explode('T', $r->Suspended_until);
                                        $su = $su[0];
                                        $popup .= '<li><b>Suspended until:</b> ' . $su . '</li>';
                                    } 
                            
                                    if(isset($r->Reason_for_suspension)){
                                        $popup .= '<li><b>Reason for suspension:</b> ' . $r->Reason_for_suspension . '</li>';
                                    }
                                }
                            
                                if($r->Certification_status === 'Certified'){
                                    if(isset($r->Date_of_expiry)){
                                        $exDate = explode('T', $r->Date_of_expiry);
                                        $exDate = $exDate[0];
                                        $popup .= '<li><b>Expiration date:</b> ' . $exDate . '</li>';
                                    } 
                                }
                            
                                if($r->Certification_status === 'Withdrawn/cancelled'){
                                    if(isset($r->Withdrawal_date)){
                                        $wDate = explode('T', $r->Withdrawal_date);
                                        $wDate = $wDate[0];
                                        $popup .= '<li><b>Withdrawal date:</b> ' . $wDate . '</li>';
                                    }
                            
                                }
                                
                            } else {
                                $popup .= '';
                            }
                            
                            
                            if(isset($r->Certification_date)){
                                $initialCert = explode('T', $r->Certification_date);
                                $initialCert = $initialCert[0];
                                $popup .= '<li><b>Last certification date:</b> ' . $initialCert . '</li>';
                            } else {
                                $popup .= '';
                            }
                            
                            if( isset($r->Industry)){
                                $popup .= '<li><b>Industry:</b> ' . $r->Industry . '</li>';
                            } else {
                                $popup .= '';
                            }
                            
                            
                            if(isset($r->Organization_address)){
                                $oAddress = $r->Organization_address;
                            }
                            
                            $popup .= '<li><b>Address:</b> ' . $oAddress . $oCity . $oZip . $oState . $oCountry . '</li>';
                            $popup .= '</ul>';
                            
                            
                            if(isset($r->Description_of_Operations)){
                                $popup .= '<b>Description of Operations:</b> ' . $r->Description_of_Operations;
                            }
                            
                            $popup .= '</div></div>';

                            $jsonString .= '},';
                        }
                    }

                    
                    if(sizeof((array)$result) === 1){

                        $resultsNumber = $key + 1;

                    } else {

                        $resultsNumber = 1;
                        $popup .= '<div class="popup popup-1"><span>×</span><div><ul>';
                        $tr .= '<tr class="pages page-1 display">';
                        $jsonString .= '{';

                        if(isset($result->Organization)){
                            $tr .= '<td>' . $result->Organization . '</td>';
                            $popup .= '<li><b>Certified Organization: </b>' . $result->Organization . '</li>';
                        } else {
                            $tr .= '<td></td>';
                            $popup .= '';
                        }
                        
                        
                        if(isset($result->CB)){
                            $tr .= '<td>' . $result->CB . '</td>';
                            $popup .= '<li><b>Certification Body:</b> ' . $result->CB . '</li>';
                        } else {
                            $tr .= '<td></td>';
                            $popup .= '';
                        }
                        
                        if(isset($result->Certificate_ID_number)){
                            $tr .= '<td>' . $result->Certificate_ID_number . '</td>';
                            $popup .= '<li><b>Certificate ID number:</b> ' . $result->Certificate_ID_number . '</li>';
                        } else {
                            $tr .= '<td></td>';
                            $popup .= '';
                        }
                        
                        if(isset($result->Certification_status)){
                            $tr .= '<td>' . $result->Certification_status . '</td>';
                            $popup .= '<li><b>Certification status:</b> ' . $result->Certification_status . '</li>';
                        
                            if($result->Certification_status === 'Suspended'){
                                if(isset($result->Suspended_from)){
                                    $sf = explode('T', $result->Suspended_from);
                                    $sf = $sf[0];
                                    $popup .= '<li><b>Suspended from:</b> ' . $sf . '</li>';
                                } 
                                if(isset($result->Suspended_until)){
                                    $su = explode('T', $result->Suspended_until);
                                    $su = $su[0];
                                    $popup .= '<li><b>Suspended until:</b> ' . $su . '</li>';
                                } 
                        
                                if(isset($result->Reason_for_suspension)){
                                    $popup .= '<li><b>Reason for suspension:</b> ' . $result->Reason_for_suspension . '</li>';
                                }
                            }
                        
                            if($result->Certification_status === 'Certified'){
                                if(isset($result->Date_of_expiry)){
                                    $exDate = explode('T', $result->Date_of_expiry);
                                    $exDate = $exDate[0];
                                    $popup .= '<li><b>Expiration date:</b> ' . $exDate . '</li>';
                                } 
                            }
                        
                            if($result->Certification_status === 'Withdrawn/cancelled'){
                                if(isset($result->Withdrawal_date)){
                                    $wDate = explode('T', $result->Withdrawal_date);
                                    $wDate = $wDate[0];
                                    $popup .= '<li><b>Withdrawal date:</b> ' . $wDate . '</li>';
                                }
                        
                            }
                            
                        } else {
                            $tr .= '<td></td>';
                            $popup .= '';
                        }
                        
                        
                        if(isset($result->Certification_date)){
                            $initialCert = explode('T', $result->Certification_date);
                            $initialCert = $initialCert[0];
                            $popup .= '<li><b>Last certification date:</b> ' . $initialCert . '</li>';
                        } else {
                            $popup .= '';
                        }
                        
                        if( isset($result->Industry)){
                            $tr .= '<td>' . str_replace(',', ', ', $result->Industry) . '</td>';
                            $popup .= '<li><b>Industry:</b> ' . $result->Industry . '</li>';
                        } else {
                            $tr .= '<td></td>';
                            $popup .= '';
                        }
                        
                        if(isset($result->Organization_address)){
                            $oAddress = $result->Organization_address;
                        }
                        if(isset($result->Organization_city)){
                            $oCity = ', ' . $result->Organization_city;
                        } else {
                            $oCity = '';
                        }
                        
                        if(isset($result->Organization_State)){
                            $oState = ', ' . $result->Organization_State;
                        } else {
                            $oState = '';
                        }
                        
                        if(isset($result->Organization_Zip)){
                            $oZip = ', ' . $result->Organization_Zip;
                        } else {
                            $oZip = '';
                        }
                        
                        if(isset($result->Organization_country)){
                            $oCountry = ', ' . $result->Organization_country;
                        } else {
                            $oCountry = '';
                        }
                        
                        $popup .= '<li><b>Address:</b> ' . $oAddress . $oCity . $oZip . $oState . $oCountry . '</li>';
                        $popup .= '</ul>';
                        
                        
                        if(isset($result->Description_of_Operations)){
                            $popup .= '<b>Description of Operations:</b> ' . $result->Description_of_Operations;
                        } else{
                            $popup .= '';
                        }

                        $exportLabelArray = exportLabelArray($result);
                            
                        foreach($exportLabelArray as $label => $res){
                            $jsonString .= cwp_create_json($label, $res);
                        }
                    
                        $popup .= '</div></div>';
                        
                        $tr .= '<td><a href="" class="ab-button ab-button-shape-rounded" data-pop="popup-1">More Info</a></td>';
                        $tr .= '</tr>';
                        
                        $jsonString .= '},';
                    }
                
                }
                // echo "<pre>"; var_dump($tr); echo '</pre>';
                

                $jsonString .= ']';
                $jsonStri = str_replace(array('"},]', ',][', '",}'), array('"}]', ',','"}'), $jsonString);
                $jsonStri = str_replace(["\r", "\n"], "", $jsonStri);
                $jsonStri = preg_replace("/\s/", " ", $jsonStri);
                $jsonStri = str_replace("\\", "", $jsonStri);
                $jsonStri = str_replace('"},]', '"}]', $jsonStri);
    
                $pages = array_unique($pages);
                if(count($pages) > 1){
                    $nav = '<div class="navigation">';
                    $nav .= '<nav class="prev hide" data-first="page-1">< Preview</nav>';
                    foreach($pages as $k => $page){
                        if($k === 0){
                            $tf = 'active';
                        } else {
                            $tf = '';
                        }
                        $nav .= '<span class="page-' . $page . ' ' . $tf . ' hide" index="' . $page . '">' . $page . '</span>';
                    }
                    if($page < 10){
                        $lessTen = 'lessTen';
                    }
                    $nav .= '<nav class="next">Next ></span></nav><i class="last-page ' . $lessTen . '" index="' . $page . '"></i></div>';
                } else {
                    $nav = '';
                }
            } // End Else
        }
        // var_dump($jsonStri);
        if(!isset($results->httpStatusCode)){
            if(isset($results)){ ?>
                <p class="st">Found <b><?php echo $resultsNumber; ?></b> matching results</p><a class="exr" href="#">Export</a>
                <textarea id="exp"><?php echo $jsonStri; ?></textarea>
                <table class="ui-sortable-table table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Organization Name</th>
                            <th>Certification Body</th>
                            <th>Certificate ID</th>
                            <th>Certification status</th>
                            <th>Industry</th>
                            <th style="width: 134px;" class="last"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $tr;?>
                    </tbody>
                </table>
                <?php echo $nav ?>
                <?php echo $popup; ?>
                <div class="popup-overlay"></div>
            <?php } else {
                echo '<p style="padding: 15px 0;">No Results Found</p>';
            } 
        }
    }
    die();
}
?>

