<?php
/*
Plugin Name: 	SA8000 public data portal
Version: 		1.3
Description: 	Search SA8000 public data plugin
Author:         customwp.io
*/

function as_search($lang = null){ 

    if($lang && $lang === 'it'){
        $nameOfOrg = "Nome dell'ente certificatore";
        $certIdNumbert = "Numero Identificativo del certificato";
        $certStatus = 'Stato del Certificato';
        $certified = 'Certificato';
        $suspended = 'Sospeso';
        $withdrawn = 'Ritirato/cancellato';
        $certificationBody = 'Ente di Certifciazione';
        $country = 'Paese';
        $industry = 'Industria';
        $descriptionOfOperations = 'Descrizione dei loro processi';
        $city = 'Città';
        $search = 'Ricerca';
        $SomethingNotRight = 'Qualcosa non è corretto?';
    } else {
        $nameOfOrg = "Name of Certified Organization";
        $certIdNumbert = "Certificate ID Number";
        $certStatus = 'Certification Status';
        $certified = 'Certified';
        $suspended = 'Suspended';
        $withdrawn = 'Withdrawn/Cancelled';
        $certificationBody = 'Certification Body';
        $country = 'Country';
        $industry = 'Industry';
        $descriptionOfOperations = 'Description of Operations';
        $city = 'City';
        $search = 'Search';
        $SomethingNotRight = 'Something not right?';
    }
    
    ?>

    <form id="search" class="search-filter">
        <div class="row filter-container">
            <label><?php echo $nameOfOrg; ?></label>
            <input type="text" class='nodrop orgname'></input>
            <label><?php echo $certIdNumbert; ?></label>
            <input type="text" class='nodrop certid'></input>
            <div class="dropdown">
                <div class="dropdown-content">
                    <label><?php echo $certStatust; ?></label>
                    <input type="text" class="certstatus"></input>
                    <div class='results'>
                        <span><?php echo $certified; ?></span>
                        <span><?php echo $suspended; ?></span>
                        <span><?php echo $withdrawn; ?></span>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown-content">
                    <label><?php echo $certificationBody; ?></label>
                    <input type="text" class="certscope"></input>
                    <div class='results'>
                        <span>ABS Quality Evaluations, Inc</span>
                        <span>Accordia Global Compliance Group</span>
                        <span>ALGI</span>
                        <span>APAVE</span>
                        <span>APCER</span>
                        <span>BCC Inc.</span>
                        <span>Benchmarks Co., Ltd.</span>
                        <span>BSI</span>
                        <span>Bureau Veritas Certification</span>
                        <span>CISE</span>
                        <span>CU Inspection & Certification India Private Limited</span>
                        <span>CTI</span>
                        <span>DNV</span>
                        <span>ESTS</span>
                        <span>EUROCERT SA</span>
                        <span>GCerti Italy S.r.l</span>
                        <span>Guardian Independent Certification Limited (GIC)</span>
                        <span>HKQAA</span>
                        <span>International Associates Limited</span>
                        <span>Intertek</span>
                        <span>IQC</span>
                        <span>IQNet</span>
                        <span>Leverage Limited</span>
                        <span>LSQA</span>
                        <span>Ozone Sustainability Management Systems </span>
                        <span>RINA</span>
                        <span>SGS</span>
                        <span>SI Cert S.a.g.l.</span>
                        <span>SMT-Global</span>
                        <span>TUV Sud</span>
                        <span>TUV Nord</span>
                        <span>TUV Rheinland</span>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown-content">
                    <label><?php echo $country; ?></label>
                    <input type="text" class="country"></input>
                    <div class='results'>
                        <span>Albania</span>
                        <span>Austria</span>
                        <span>Bangladesh</span>
                        <span>Belgium</span>
                        <span>Bosnia-Herzegovina</span>
                        <span>Brazil</span>
                        <span>British Indian Ocean Territory</span>
                        <span>Bulgaria</span>
                        <span>Cambodia</span>
                        <span>Canada</span>
                        <span>Chile</span>
                        <span>China</span>
                        <span>Colombia</span>
                        <span>Costa Rica</span>
                        <span>Croatia</span>
                        <span>Czech Republic</span>
                        <span>Denmark</span>
                        <span>Egypt</span>
                        <span>El Salvador</span>
                        <span>France</span>
                        <span>Germany</span>
                        <span>Greece</span>
                        <span>Guatemala</span>
                        <span>Honduras</span>
                        <span>Hong Kong</span>
                        <span>India</span>
                        <span>Indonesia</span>
                        <span>Italy</span>
                        <span>Kosovo</span>
                        <span>Lao people's democratic rep.</span>
                        <span>Latvia</span>
                        <span>Lithuania</span>
                        <span>Macedonia</span>
                        <span>Maldives</span>
                        <span>Mauritius</span>
                        <span>Mexico</span>
                        <span>Moldova, republic of</span>
                        <span>Morocco</span>
                        <span>Netherlands</span>
                        <span>Pakistan</span>
                        <span>Panama</span>
                        <span>Peru</span>
                        <span>Philippines</span>
                        <span>Poland</span>
                        <span>Portugal</span>
                        <span>Romania</span>
                        <span>Slovenia</span>
                        <span>Spain</span>
                        <span>Sri Lanka</span>
                        <span>Switzerland</span>
                        <span>Taiwan</span>
                        <span>Thailand</span>
                        <span>Tunisia</span>
                        <span>Turkey</span>
                        <span>Ukraine</span>
                        <span>United Kingdom</span>
                        <span>United States</span>
                        <span>Viet Nam</span>
                    </div>
                </div>
            </div>
            <div class="dropdown">
                <div class="dropdown-content">
                    <label><?php echo $industry; ?></label>
                    <input type="text" class="industry"></input>
                    <div class='results'>
                        <span>Crop & animal production; hunting; & related service activities</span>
                        <span>Forestry & logging</span>
                        <span>Fishing & aquaculture</span>
                        <span>Mining & quarrying</span>
                        <span>Manufacturing: Food & beverages</span>
                        <span>Manufacturing: Tobacco products</span>
                        <span>Manufacturing: Textiles,apparel,garments,leather,footwear,& related products</span>
                        <span>Manufacturing: Wood & cork products,EXCEPT furniture; straw & plaiting materials</span>
                        <span>Manufacturing: Paper & paper products</span>
                        <span>Manufacturing: Printing & reproduction of recorded media</span>
                        <span>Manufacturing: Coke (fuel),refined petroleum products,chemical,& chemical products,including cosmetics</span>
                        <span>Manufacturing: Pharmaceuticals,medicinal,& botanical products</span>
                        <span>Manufacturing: Rubber & plastic products</span>
                        <span>Manufacturing: Other non-metallic products</span>
                        <span>Manufacturing: Metals & metal products,EXCEPT machinery & equipment</span>
                        <span>Manufacturing: Computer,electronic,& optical products</span>
                        <span>Manufacturing: Electrical equipment</span>
                        <span>Manufacturing: Machinery & equipment</span>
                        <span>Manufacturing: Motor vehicles,trailers,& semi-trailers</span>
                        <span>Manufacturing: Other transport equipment</span>
                        <span>Manufacturing: Furniture</span>
                        <span>Manufacturing: Other not listed,including: jewelry & watches; sports equipment; games & toys; medical & dental supplies; writing instruments; etc.</span>
                        <span>Electricity,gas,steam,& air conditioning supply</span>
                        <span>Water collection,treatment,& supply</span>
                        <span>Sewerage; waste collection,treatment & disposal activities; materials recovery</span>
                        <span>Remediation activities & other waste management services</span>
                        <span>Construction of buildings</span>
                        <span>Civil engineering; infrastructure</span>
                        <span>Specialized construction activities</span>
                        <span>Wholesale & retail trade,AND repair of motor vehicles & motorcycles</span>
                        <span>Wholesale & retail trade,EXCEPT of motor vehicle & motorcycles</span>
                        <span>Land,water,& air transport activities</span>
                        <span>Warehousing & support activities for transportation</span>
                        <span>Postal & courier activities</span>
                        <span>Accommodation,i.e.: hotel,camping,recreational vehicle parks,etc.</span>
                        <span>Food & beverage service; catering services</span>
                        <span>Information technology; telecommunications</span>
                        <span>Financial & insurance activities</span>
                        <span>Real estate activities</span>
                        <span>Legal & accounting activities</span>
                        <span>Activities of head offices; management consultancy activities</span>
                        <span>Veterinary activities</span>
                        <span>Other professional,scientific,& technical activities not listed</span>
                        <span>Rental & leasing activities</span>
                        <span>Employment & recruiting activities</span>
                        <span>Travel agency,tour operator,reservation service,& related activities</span>
                        <span>Security & investigation activities</span>
                        <span>Services to buildings & landscape activities</span>
                        <span>Office administrative,office support,& other business support activities</span>
                        <span>Government,public administration & defense; compulsory social security</span>
                        <span>Education</span>
                        <span>Human health & medical activities</span>
                        <span>Residential care & other social work activities</span>
                        <span>Arts,entertainment,recreation,culture,& sports activities</span>
                        <span>Repair of computers,personal & household goods</span>
                        <span>Other service activities not listed</span>
                        <span>Domestic activities of households as employers; undifferentiated goods- and services-producing activities of households for own use</span>
                        <span>Embassies,consulates,& other extraterritorial (international) organisations</span>

                    </div>
                </div>
            </div>
            <label><?php echo $descriptionOfOperations; ?></label>
            <input type="text" class='nodrop description'></input>
            <label><?php echo $city; ?></label>
            <input type="text" class='nodrop city'></input>
            <button type="submit" class="search-btn"><?php echo $search; ?></button>
            <span class="search-btn2 clear">Clear Fields</span>
        </div>

    </form>
    <div class="search-results table"></div>
    <script>
        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ) ; ?>";
    </script>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

    <script>

    jQuery(document).ready(function($){
        $('.dropdown-content input').focus(function(){
            $(this).next().css('display','grid');
            $(this).parent().siblings().find($('.results'));
            $(this).parent().parent().siblings().find($('.results')).css('display','none');
            $(this).keyup(function(){
                var input, filter, ul, li, a, i;
                input = $(this);
                filter = input.val().toUpperCase();
                a = $(this).next().find('span');
                for (i = 0; i < a.length; i++) {
                    txtValue = a[i].textContent || a[i].innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        a[i].style.display = "";
                    } else {
                        a[i].style.display = "none";
                    }
                }
            })  
        })

        $('.results span').click(function(){
            var value = $(this).text();
            $(this).parent().siblings('input').val(value);
            $(this).parent().css('display','none');
            console.log($(this).parent().siblings('input').val());
            // $(this).parent().siblings().addClass('active');
            
        })

        $('.nodrop').click(function(){
            $('.results').css('display','none');
        })

        $(document).mouseup(function(e) {
            var container = $('div.dropdown');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.find($('.results')).hide();
            }
        });

        var html = $('.search-results').html();
        $('.search-results.with-borders').html('<h3>With border</h3>' + html);
        $('.search-results.more-cards').html(html);

        // Search 

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;

        

        $('.search-btn').click(function(e){
            e.preventDefault();
            processSaRequest();

        })

        processSaRequest();

        function processSaRequest(){

            $(this).attr('disabled', true);
            var apiUrl = ajaxurl + '?action=cwp_get_results';
            var country = '&Country=' + $('input.country').val();
            var industry = '&Industry=' + $('input.industry').val();
            var certStat = '&Certification_status=' + $('input.certstatus').val();
            var orgName = '&Certified_Organization=' + $('input.orgname').val();
            var certId = '&Certification_ID=' + $('input.certid').val();
            var description = '&Description of Operations=' + $('input.description').val();
            var city = '&City=' + $('input.city').val();
            var cb = '&CB=' + $('input.certscope').val()
                
            apiUrl = apiUrl + country + industry + certStat + orgName + certId + description + city + cb; 

            $('.search-btn').addClass('active');
            $('.search-filter').addClass('active');
            
            $.ajax({
                url: apiUrl, 
                success: function(result){
                    $('.search-filter').removeClass('active');
                    $(".search-results").html(result);
                    sortTable($);
                    $('.navigation span').each(function(){
                        if($(this).attr('index') < 5){
                            $(this).removeClass('hide');
                        }
                    })
                    $('.search-btn').attr('disabled', false);
                    var lastPage = $('i.last-page').attr('index');
                    var lastClass = $('i.last-page').attr('class');
                    $('.navigation span.page-' + lastPage).removeClass('hide');
                    $('.navigation span.page-' + lastPage).addClass('last');
                    $('.navigation span.page-' + lastPage).addClass(lastClass);
                    $('.search-btn').removeClass('active');
                    pagination();
                    $('.ab-button.ab-button-shape-rounded').click(function(e){
                        e.preventDefault();
                        console.log($(this).attr('data-pop'));
                        var popClass = $(this).attr('data-pop');
                        popClass = '.' + popClass; 
                        $(popClass).css('display','block');
                        $('.popup-overlay').css('display','block');
                        $('.popup span').click(function(){
                            $(popClass).css('display','none');
                            $('.popup-overlay').css('display','none');
                        })
                    })

                    $('.exr').click(function(e){
                        e.preventDefault();
                        var data = $('#exp').val();
                        if(data == '')
                            return;
                        
                        JSONToCSVConvertor(data, today, true);
                    });

                    $('div.navigation span').click(function(e){
                        e.preventDefault();
                        var theClass = $(this).attr('class');
                        $('.navigation span').addClass('hide');
                        
                        if(theClass.indexOf(' ') > -1){
                            var classArray = theClass.split(' ');
                            theClass = classArray[0];
                        }

                        console.log(theClass);

                        $(this).addClass('active');
                        $(this).siblings().removeClass('active');
                        $('tr.pages.' + theClass).siblings().removeClass('display')
                        $('tr.pages.' + theClass).addClass('display');
                        pageScroll();
                        pagination();
                    })

                    $('div.navigation .next').click(function(e){
                        e.preventDefault();
                        var current = $('div.navigation span.active');
                        var next = $('div.navigation span.active').next('span');
                        var nextClass = $(next).attr('class');
                        $('tr.pages.' + nextClass).siblings().removeClass('display')
                        $('tr.pages.' + nextClass).addClass('display');
                        current.removeClass('active');
                        next.addClass('active');
                        pageScroll();
                        pagination();
                    })

                    $('div.navigation .prev').click(function(e){
                        e.preventDefault();
                        var current = $('div.navigation span.active');
                        var prev = $('div.navigation span.active').prev('span');
                        var prevClass = $(prev).attr('class');
                        $('tr.pages.' + prevClass).siblings().removeClass('display')
                        $('tr.pages.' + prevClass).addClass('display');
                        current.removeClass('active');
                        prev.addClass('active');
                        pageScroll();
                        pagination();
                    })
                }
                
            });
        }

        function ifPrev(){

            if($('.navigation span.page-1').hasClass('active')){
                $('nav.prev').addClass('hide');
            } else {
                $('nav.prev').removeClass('hide');
            }
        }

        function ifNext(){
            var current = $('.navigation span.active').next('span');
            if(current.length === 0){
                $('nav.next').addClass('hide');
            } else {
                $('nav.next').removeClass('hide');
            }
        } 

        function pageScroll(){
            $([document.documentElement, document.body]).animate({
                scrollTop: $(".search-btn").offset().top
            }, 1000);
        }

        function pagination(){
            // var index = $('.navigation span.active').attr('index');
            
            $(this).removeClass('hide');
            $('.navigation span.active').next().next().next().next().removeClass('hide');
            $('.navigation span.active').next().next().next().removeClass('hide');
            $('.navigation span.active').next().next().removeClass('hide');
            $('.navigation span.active').next().removeClass('hide');
            $('.navigation span.active').prev().prev().addClass('hide');
            $('.navigation span.active').prev().removeClass('hide');
            $('.navigation span.page-1.hide').css('display','inline');
            $('.navigation span.page-1.hide').text('...');
            if($('.navigation span.page-2').hasClass('active')){
                $('.navigation span.page-1').text('1');
            }

            if($('.navigation span.page-1.hide.active').hasClass('active')){
                $('.navigation span.page-1').text('1');
            }

            if($('.navigation span.page-1').hasClass('active')){
                $('nav.prev').addClass('hide');
            } else {
                $('nav.prev').removeClass('hide');
            }

            var current = $('.navigation span.active').next('span');
            if(current.length === 0){
                $('nav.next').addClass('hide');
            } else {
                $('nav.next').removeClass('hide');
            }
            
            // if($('.navigation span.active').attr('index') < 5){
            //     $('.navigation span').removeClass('hide');
            // }
            // index2 =parseInt(index) - 2;
            // index = parseInt(index) + 4;
            // index2 = '.navigation span.page-' + index2; 
            // console.log(index);
            // index = '.navigation span.page-' + index;
            // $(index).removeClass('hide');
            // $(index2).removeClass('hide');
           
        }
        $('.search-filter').keydown(function(){
            $('.search-btn2.clear').addClass('actv');
        })

        $('.search-filter').change(function(){
            $('.search-btn2.clear').addClass('actv');
        })

        $('.search-btn2.clear').click(function(){
            $('.search-filter input').each(function(){
                $(this).val('');
            })
            $(this).removeClass('actv');
            $('.search-filter .row.filter-container label').removeClass('active');
        })

        $('.dropdown-content .results span').click(function(){
            $('.search-btn2.clear').addClass('actv');
        })
        
        $('.row.filter-container input.nodrop').focus(function(){
            $(this).prev().addClass('active')
        }).blur(function() {
            if(!$(this).val()){
                $(this).prev().removeClass('active');
            }
        });

        $('.row.filter-container .dropdown input').focus(function(){
            $(this).prev().addClass('active')
        }).blur(function() {
            var currentItem = $(this);
            setTimeout(function () {
                if(!$(currentItem).val()){
                    $(currentItem).prev().removeClass('active');
                }
            }, 200)
            
        });
    })
    </script>
    <script>
        function sortTable($) {

            /** PUBLIC FUNCTIONS */

            // constructor
            $.fn.sortableTable = function() {
                // add the standard ui class for styling the table
                // table
                $(this).addClass('ui-sortable-table');
                $(this).addClass('ui-sortable-table-initialized');
                // head
                $thead = $(this).find('thead');
                $thead.addClass('ui-sortable-thead');
                // body
                $tbody = $(this).find('tbody');
                $tbody.addClass('ui-sortable-tbody');
                // default to ascending order
                $tbody.removeClass('asc');
                $tbody.addClass('desc');
                // find the headers <th> and add the click event listener to each one and
                // classes for styling
                const theadTh = $(this).find('thead th');
            
                for (let i = 0; i < theadTh.length; i++) {
                    console.log($(theadTh[i]).html($(theadTh[i]).html() + '<span class="asc"></span><span class="desc"></span>'));
                    $(theadTh[i]).addClass('ui-sortable-th');
                    $(theadTh[i]).addClass('ui-sortable-th-' + i);
                    $(theadTh[i]).click(sortColumn);
                }
            }

            /** PRIVATE FUNCTIONS */

            // click event to sort columns
            function sortColumn() {
            // don't sort columns with no text in the heading
            if ($(this).text() == '') return;
            // get the table
            $table = $(this).parent().parent().parent();
            // get the tbody
            $tbody = $table.find('tbody');
            // sort order of the column
            let sortOrder;
            if ($tbody.hasClass('asc')) {
                sortOrder = 'asc';
                $tbody.removeClass('asc');
                $table.find('th').removeClass('asc');
                $tbody.addClass('desc');
                $(this).addClass('desc');
            } else {
                sortOrder = 'desc';
                $tbody.removeClass('desc');
                $table.find('th').removeClass('desc');
                $tbody.addClass('asc');
                $(this).addClass('asc');
            }
            // index of the column we are clicking on
            const columIndex = $(this).index();
            // sort the columns
            $tbody.find('tr').sort(function(a, b) {
                if (sortOrder == 'desc') [a, b] = [b, a];
                return $('td:eq(' + columIndex + ')', a).text().localeCompare($('td:eq(' + columIndex + ')', b).text());
            }).appendTo($tbody);
            }

            /** INITIALIZE ANY TABLES WITH THE CLASS NAME NOT ALREADY INITIALIZED IN JS */

            $(document).ready(function() {
                const sortableTables = $('.ui-sortable-table:not(.ui-sortable-table-initialized)');
                for (let i = 0; i < sortableTables.length; i++) {
                    $(sortableTables[i]).sortableTable();
                }
                $('.ui-sortable-th').click(function(){
                        $('.ui-sortable-table.table tbody tr').each(function(e,f){
                            var theClass = $(this).attr('class');
                            $(this).removeClass(theClass);
                            $(this).addClass('pages');
                            var pages = e + 1 ; 
                            pages = pages / 20 ; 
                            pages = parseInt(pages) + 1
                            $(this).addClass('page-' + pages);
                            console.log(pages);
                            if(pages === 1 ){
                                $(this).addClass('display');
                                $('.navigation .page-1').addClass('active');
                                $('.navigation .page-1').removeClass('hide');
                                $('.navigation span.page-1').text('1');
                                $('.navigation .page-1').siblings().removeClass('active');
                                $('.navigation .page-1').siblings().addClass('hide');
                                $('.navigation span.active').next().next().next().next().removeClass('hide');
                                $('.navigation span.active').next().next().next().removeClass('hide');
                                $('.navigation span.active').next().next().removeClass('hide');
                                $('.navigation span.active').next().removeClass('hide');
                                $('.navigation nav.next').removeClass('hide');
                            }
                        
                        })
                    })
            });

            

        };

        function JSONToCSVConvertor(JSONData, ReportTitle, ShowLabel) {
            //If JSONData is not an object then JSON.parse will parse the JSON string in an Object
            var arrData = typeof JSONData != 'object' ? JSON.parse(JSONData) : JSONData;
            
            var CSV = '';    
            //Set Report title in first row or line
            
            CSV += ReportTitle + '\r\n\n';

            //This condition will generate the Label/Header
            if (ShowLabel) {
                var row = "";
                
                //This loop will extract the label from 1st index of on array
                for (var index in arrData[0]) {
                    
                    //Now convert each value to string and comma-seprated
                    row += index + ',';
                }

                row = row.slice(0, -1);
                
                //append Label row with line break
                CSV += row + '\r\n';
            }
            
            //1st loop is to extract each row
            for (var i = 0; i < arrData.length; i++) {
                var row = "";
                
                //2nd loop will extract each column and convert it in string comma-seprated
                for (var index in arrData[i]) {
                    row += '"' + arrData[i][index] + '",';
                }

                row.slice(0, row.length - 1);
                
                //add a line break after each row
                CSV += row + '\r\n';
            }

            if (CSV == '') {        
                alert("Invalid data");
                return;
            }   
            
            //Generate a file name
            var fileName = "Search Report_";
            //this will remove the blank-spaces from the title and replace it with an underscore
            fileName += ReportTitle.replace(/ /g,"_");   
            
            //Initialize file format you want csv or xls
            var uri = 'data:text/csv;charset=utf-8,' + escape(CSV);
            
            // Now the little tricky part.
            // you can use either>> window.open(uri);
            // but this will not work in some browsers
            // or you will not get the correct file extension    
            
            //this trick will generate a temp <a /> tag
            var link = document.createElement("a");    
            link.href = uri;
            
            //set the visibility hidden so it will not effect on your web-layout
            link.style = "visibility:hidden";
            link.download = fileName + ".csv";
            
            //this part will append the anchor tag and remove it after automatic click
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>

<style>
        form#search{
            background:#002469;
            padding:15px 15px 45px;
            position:relative;
            
        }
        #genesis-content{
            width:100%;
        }

        form#search input,
        form#search select{
            width:calc(33% - 30px);
            background: transparent;
            border-bottom:2px solid #fff;
            border-top:none;
            border-left:none;
            border-right: none;
            color: #fff;
            margin: 15px;
        }

        form#search input{
            position:relative
        }

        form#search select option{
            color:#000;
        }

        form#search select{
            position: relative;
            top: -4px;
        }

        form#search input::placeholder{
            color:#fff;
        }

        form#search button{
            float: right;
            margin: 30px 15px 0;
            background: #fff;
            color: #002469;
            position:relative;
            transition: 0s !important
        }
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
            background-color: #3e8e41;
        }

        .dropdown {
            width: calc(33% - 30px);
            display: inline-block;
            position:relative;
            margin-right:30px;
        }

        .dropdown input{
            width:100% !important
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}

        form#search #myInput{
            width:100%
        }

        #myDropdown{
            width: 100%;
        }

        .results{
            display:none;
            position: absolute;
            background: #fff;
            width: 100%;
            left: 15px;
            top: 70px;
            max-height: 190px;
            overflow-y: auto;
            z-index: 1;
        }

        .results span{
            padding:5px 15px;
        }

        .results span:hover{
            cursor:pointer;
            background: rgba(0,0,0,0.04)
        }

        p.st{
            margin:30px 0 15px;
            float:left;
        }

        .search-item ul{
            display: inline-block;
            width:49%;
            margin-bottom: 10px;
            padding-left:0;
        }
    
        .search-item ul li{
            list-style-type: none;
        }

        .search-item{
            box-shadow: 0 0 3px 1px rgba(0,0,0,0.1);
            padding:15px;
            margin-bottom:15px;
        }

        .search-item p{
            margin-bottom: 0;
        }

        .search-item .ab-button.ab-button-shape-rounded{
            margin-top:15px
        }

        .search-results.with-borders .search-item{
            box-shadow: none;
            padding-left: 0;
            border-bottom: 1px solid #ccc;
        }

        .search-results h3{
            margin-top: 30px;
            margin-bottom: 0
        }

        .search-results.more-cards p.st{
            display: none;
        }

        .search-results.more-cards{
            display: grid;
            grid-template-columns: auto auto;
            grid-gap: 10px;
        }

        .search-results.more-cards .search-item p{
            height:90px;
            overflow:hidden;
        }

        .search-results.table td{
            padding:10px !important;
            border-top:1px solid #333;
            border-bottom:1px solid #333;
            vertical-align:middle;
            word-wrap: break-word;
        }

        .search-results.table th{
            background: #CDEBF8;
            padding: 10px 20px 10px 10px ;
        }

        .popup{
            width: 100%;
            max-width: 1080px;
            position: fixed;
            top: 20%;
            margin: 0 auto;
            background: #fff;
            box-shadow: 0 0 3px 2px rgb(0 0 0 / 40%);
            padding: 30px;
            left: 0;
            right: 0;
            display:none;
            z-index: 999;
            text-align:left;
        }

        .popup span{
            position: absolute;
            right: 10px;
            top: -7px;
            font-size: 30px;
            cursor: pointer;
        }

        .popup ul li {
            list-style-type: none;
            width:50%;
            display: inline-block;
        }

        .popup ul{
            display: inline-block;
            width: 100%;
            margin-bottom: 10px;
            padding-left: 0;
        }
        table .ab-button{
            background:#43B1F0;
        }
        table .ab-button:hover{
            color:#333;
        }

        .popup-overlay{
            width: 100%;
            position: fixed;
            height:100%;
            background:rgba(0,0,0,0.3);
            top: 0;
            left: 0;
            display:none;
        }

        span.asc:after {
            content: " \25B2";
            cursor:pointer;
            font-size:12px
        }

        span.asc{
            position: absolute;
            right: 5px;
            top: 8px;
        }

        span.desc:after {
            content: " \25BC";
            cursor:pointer;
            font-size:12px
        }

        span.desc{
            position: absolute;
            right: 5px;
            bottom: 8px;
        }

        th.ui-sortable-th{
            position:relative;
        }

        th.last span{
            display:none;
        }

        a.exr{
            text-align: center;
            font-size: 18px;
            line-height: 1 !important;
            background-color: #002469;
            border: none;
            border-radius: 5px;
            box-shadow: none;
            color: #fff;
            cursor: pointer;
            padding: .6em 1em;
            text-decoration: none;
            word-break: break-word;
            transition: .3s ease;
            display: inline-block;
            float: right;
            position: relative;
            top: 30px;
        }

        .ui-sortable-table.table.table-bordered.table-striped{
            table-layout: fixed;
        }

        #exp{
            display:none;
        }

        @keyframes spinner {
            0% {
            transform: translate3d(-50%, -50%, 0) rotate(0deg);
            }
            100% {
            transform: translate3d(-50%, -50%, 0) rotate(360deg);
            }
        }

        .search-btn:before {
            animation: 1s linear infinite spinner;
            animation-play-state: inherit;
            border: solid 5px #cfd0d1;
            border-bottom-color: #1c87c9;
            border-radius: 50%;
            content: "";
            height: 40px;
            position: absolute;
            top: 24px;
            left: 55px;
            transform: translate3d(-50%, -50%, 0);
            width: 40px;
            will-change: transform;
            display:none;
        }

        .search-btn.active:before{
            display:block;
        }

        .search-btn.active{
            color:transparent !important;
        }

        tr.pages{
            display:none;
        }

        tr.pages.display{
            display:table-row;
        }
        div.navigation{
            text-align:center;
        }

        div.navigation span{
            padding: 0 5px;
            cursor: pointer;
        }

        div.navigation span.active{
            font-weight:bold;
        }

        nav{
            cursor:pointer;
        }

        .prev.hide,
        .next.hide{
            display:none;
        }

        .next{
            position: absolute;
            right: 0;
            top: 0;
        }

        .prev{
            position: absolute;
            left: 0;
            top: 0;
        }

        .navigation{
            position: relative;
            text-align: center;
            width: 100%;
            padding: 0 90px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        .navigation span.hide{
            display:none;
        }

        .navigation span.hide.active{
            display:inline;
        }

        .search-btn2.clear{
            border: 2px solid #fff;
            color: #fff;
            position: absolute;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            padding: 9px 13px;
            text-align: center;
            text-decoration: none;
            white-space: normal;
            width: auto;
            right: 150px;
            bottom: 49px;
            display:none;
        }

        .search-btn2.clear.actv{
            display:block;
        }

        .navigation span.last.hide{
            display:inline;
        }
        .navigation span.last:before{
            content:'... ';
        }

        .navigation .last.hide.active:before{
            display:none;
        }

        .navigation .last-page.lessTen:before{
            display:none;
        }

        .ui-sortable-th{
            line-height: 1.2;
        }

        .search-filter .row.filter-container label{
            color: #fff;
            position: absolute;
            margin-left: 25px;
            margin-top: 25px;
            transition: 0.3s
        }
        .search-filter .row.filter-container label.active{
            font-size: 14px;
            margin-top: 0;
            transition: 0.3s
        }

        .search-filter.active{
            opacity:0.5
        }
    </style>

<?php  }

function as_sa8000($atts){
    ob_start();
    as_search($atts["lang"]);
    $output = ob_get_clean();
    return $output;
} 

add_shortcode('as_sa8000','as_sa8000');

add_option('cwp_stats','4398,56,55','','no');

function cwp_get_stats(){
    include 'api.php';
    $allResults = as_getResults('https://database.sa-intl.org/api/v0/custom/certification');
    $facilities = [];
    $countries = [];
    $industries = [];
    // var_dump($allResults->Certification);
    foreach($allResults->Certification as $result){
        
        if($result->Certification_status === 'Certified'){
            if($result->Organization){
                array_push($facilities, $result->Organization);
            }
            if($result->Organization_country){
                array_push($countries, $result->Organization_country);
            }
            if($result->Industry){
                array_push($industries, $result->Industry);
            }
        }
    }

    $nFacilities = count(array_unique($facilities));
    $nCountries = count(array_unique($countries));
    $nIndustries = count(array_unique($industries));
    $return = $nFacilities . ',' . $nCountries . ',' . $nIndustries;
    return $return;
}

function as_sa8000_stats($atts){
    $result = get_option('cwp_stats');
    $result = explode(',',$result);
    $nFacilities = $result[0];
    $nCountries = $result[1];
    $nIndustries = $result[2];
    if($atts['stats'] === 'facilities'){
        $theResult = $nFacilities;
    }
    if($atts['stats'] === 'countries'){
        $theResult = $nCountries;
    }
    if($atts['stats'] === 'industries'){
        $theResult = $nIndustries;
    }

    if(isset($atts['size'])){
        $size = $atts['size'];
    } else {
        $size = '24';
    }

    $ret = '<span style="font-size:' . $size . 'px; font-weight:bold">' . $theResult . '</span>';

    ob_start();
    echo $ret;
    $output = ob_get_clean();
    return $output;
} 

add_shortcode('as_sa8000_stats','as_sa8000_stats');

add_action('init','cwp_create_stats_cron');

function cwp_create_stats_cron() {
    if (! wp_next_scheduled ( 'cwp_update_stats_cron' )) {
        wp_schedule_event(time(), 'daily', 'cwp_update_stats_cron');
    }
}
 
add_action('cwp_update_stats_cron', 'cwp_update_stats_cron_callback');
 
function cwp_update_stats_cron_callback() {
    $stats = cwp_get_stats();
    update_option('cwp_stats',$stats,'no');
}

add_shortcode('cwp_accredited_CB','cwp_accredited_CB');

function cwp_accredited_CB($atts){
    $args = ['post_type' => 'resource',
              'numberposts' => -1, 
              'category' => 300,
              'orderby' => 'title',
              'order' => 'ASC' ];
    $result = '';
    // $result .= '<script>var ajaxUrl = "' . admin_url('admin-ajax.php') . '" </script>';

    $allCbs = get_posts($args);
    $locations = [' '];
  
    foreach($allCbs as $cb){
        $terms = wp_get_post_terms( $cb->ID, array( 'region' ) );
        $x = '';
        if($terms){
            foreach($terms as $term){
                $x .= $term->slug . ' ';
                $locations[$term->slug] = $term->name;
            }
        }

        $title = "<h3><a href='$cb->guid'>$cb->post_title</a></h3>";
        $scope = (get_field('scope_of_accreditation',$cb->ID)) ? '<p><b>Scope of Accreditation:</b> ' . get_field('scope_of_accreditation',$cb->ID) . '</p>' : '';
        $suspension = (get_field('accreditation_status',$cb->ID)) ? '<p><b>Accreditation Status:</b> ' . get_field('accreditation_status',$cb->ID) . '</p>' : '';
        $link = "<a href='$cb->guid'>See Details</a>";
        $result .= "<res class='result " . $x . "'>";
        $result .= $title . $scope . $suspension . $link;
        $result .= "</res>";
    }

    $locations = array_unique($locations);
    // var_dump($locations);
    
    if($atts[0] === 'locations'){
        $loc = '<label class="cwpsfl">Region</label>';
        $loc .= '<select class="cwpsf" id="cwpregion">';
        foreach($locations as $k => $location){
            $loc .= '<option value="' . $k . '">' . $location . '</option>';
        }
        $loc .= '</select>';
        return $loc;
    }

    if($atts[0] === 'search'){
        $search = '<label class="cwpsfl">Search CBs</label>';
        $search .= '<input class="cwpsf" type="text" id="cwpInput" onkeyup="cwp_acc_search()">';
        return $search;
    }

    if($atts[0] === 'buttons'){
        $bttn = '<span class="cwp-reset">Clear Fields</span>';
        $bttn .= '<span class="cwp-sa-search">Search</span>';
        return $bttn;
    }

    if(!$atts){
        $res = "<div class='ptam-block-post-grid aligncenter'><div id='cwpUl' class='ptam-post-grid-items is-grid columns-2'>$result</div><div id='cwp-facet-loading'><span id='cwp-facet-loading-icon'></span></div></div>";
        $res .= "<link rel='stylesheet' id='metorik-css-css'  href='" . plugins_url() . '/' . basename(dirname(__FILE__)) . "/inc/style.css' type='text/css' media='all' />";
        $res .= '<script src="' . plugins_url() . '/' . basename(dirname(__FILE__)) . '/inc/custom.js"></script>';
        return $res;
    }
    
}

add_shortcode('cwp_accredited_search','cwp_accredited_search');

add_action('wp_ajax_cwp_facet_cb','cwp_facet_cb');
add_action('wp_ajax_nopriv_cwp_facet_cb','cwp_facet_cb');

function cwp_facet_cb(){
    if($_POST){
        $postIds = [];
        foreach($_POST['post_id'] as $p){
            array_push($postIds, (int)$p);
        }
        $args = array(
            'post_type' => 'resource',
            'numberposts' => -1,
            'post__in' => $postIds
            
        );
        
        $resources = get_posts($args);
        $result = '';
        foreach($resources as $cb){
            $title = "<h3><a href='$cb->guid'>$cb->post_title</a></h3>";
            $scope = (get_field('scope_of_accreditation',$cb->ID)) ? '<p><b>Scope of Accreditation:</b> ' . get_field('scope_of_accreditation',$cb->ID) . '</p>' : '';
            $suspension = (get_field('accreditation_status',$cb->ID)) ? '<p><b>Accreditation Status:</b> ' . get_field('accreditation_status',$cb->ID) . '</p>' : '';
            $link = "<a href='$cb->guid'>See Details</a>";
            $result .= "<res class='result " . $x . "'>";
            $result .= $title . $scope . $suspension . $link;
            $result .= "</res>";
        }

        echo $result;
        die();
    }
}

add_action('wp_ajax_cwp_get_all_cbs','cwp_get_all_cbs');
add_action('wp_ajax_nopriv_cwp_get_all_cbs','cwp_get_all_cbs');

function cwp_get_all_cbs(){
    $args = ['post_type' => 'resource',
              'numberposts' => -1, 
              'category' => 300,
              'orderby' => 'title',
              'order' => 'ASC' ];
    $result = '';

    $allCbs = get_posts($args);
    foreach($allCbs as $cb){
        $title = "<h3><a href='$cb->guid'>$cb->post_title</a></h3>";
        $scope = (get_field('scope_of_accreditation',$cb->ID)) ? '<p><b>Scope of Accreditation:</b> ' . get_field('scope_of_accreditation',$cb->ID) . '</p>' : '';
        $suspension = (get_field('accreditation_status',$cb->ID)) ? '<p><b>Accreditation Status:</b> ' . get_field('accreditation_status',$cb->ID) . '</p>' : '';
        $link = "<a href='$cb->guid'>See Details</a>";
        $result .= "<res class='result " . $x . "'>";
        $result .= $title . $scope . $suspension . $link;
        $result .= "</res>";
    }

    echo $result;
    die();
}

include 'api.php';
add_action('wp_ajax_cwp_get_results','cwp_get_results');
add_action('wp_ajax_nopriv_cwp_get_results','cwp_get_results');