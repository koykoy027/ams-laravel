<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="/img/ams-logo.png" />

<!-- Google fonts-->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />


{{-- Core theme CSS (includes Bootstrap) --}}
<link href="css/custom-css.css" rel="stylesheet" />
{{-- CUSTOM CSS --}}
<link href="css/styles.css" rel="stylesheet" />
{{-- DATA TABLES CSS --}}
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.css"/>
 

{{-- JAVASCRIPT --}}

{{-- CUSTOM JS --}}
<script src="js/scripts.js"></script>
{{-- Bootstrap core JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Font Awesome icons (free version)-->
<script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
{{-- JQUERY --}}
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{-- DATA TABLES QUERY --}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>






{{-- DATA TABLES --}}
<script>
    $(document).ready( function () {
        $('#alumni').DataTable();        
    });
</script>

{{-- ALUMNI FIND JOB --}}
<script>
        $(document).ready( function () {
        $('#alumni-connect-job').DataTable({                            
            sorting:false,
            paging:false,            
        });
        $('div#alumni-connect-job_filter input').addClass('py-2 px-5 col-12 justify-content-center');
        $('div#alumni-connect-job_filter input').attr('placeholder', 'Job Title, Company, City');    
    });
</script>

{{-- ALUMNI FIND EMPLOYEE --}}
<script>
    $(document).ready( function () {
        $('#alumni-connect-employee').DataTable({                            
            sorting:false,
            paging:false,            
        });
        $('div#alumni-connect-employee_filter input').addClass('py-2 px-5 col-12 justify-content-center');
        $('div#alumni-connect-employee_filter input').attr('placeholder', 'Search Person');    
    });
</script>

