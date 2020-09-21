$(function () {
    "use strict";

    $(".preloader").fadeOut();

    $(".left-sidebar").hover(
        function () {
            $(".navbar-header").addClass("expand-logo");
        },
        function () {
            $(".navbar-header").removeClass("expand-logo");
        }
    );
    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").on('click', function () {
        $("#main-wrapper").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
    });
    $(".nav-lock").on('click', function () {
        $("body").toggleClass("lock-nav");
        $(".nav-lock i").toggleClass("mdi-toggle-switch-off");
        $("body, .page-wrapper").trigger("resize");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on('click', function () {
        $(".app-search").toggle(200);
        $(".app-search input").focus();
    });

    // ==============================================================
    // Right sidebar options
    // ==============================================================
    $(function () {
        $(".service-panel-toggle").on('click', function () {
            $(".customizer").toggleClass('show-service-panel');

        });
        $('.page-wrapper').on('click', function () {
            $(".customizer").removeClass('show-service-panel');
        });
    });
    // ==============================================================
    // This is for the floating labels
    // ==============================================================
    $('.floating-labels .form-control').on('focus blur', function (e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

    // ==============================================================
    //tooltip
    // ==============================================================
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    // ==============================================================
    //Popover
    // ==============================================================
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    // ==============================================================
    // Perfact scrollbar
    // ==============================================================
    $('.message-center, .customizer-body, .scrollable').perfectScrollbar({
        wheelPropagation: !0
    });

    /*var ps = new PerfectScrollbar('.message-body');
    var ps = new PerfectScrollbar('.notifications');
    var ps = new PerfectScrollbar('.scroll-sidebar');
    var ps = new PerfectScrollbar('.customizer-body');*/

    // ==============================================================
    // Resize all elements
    // ==============================================================
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();

    // ==============================================================
    // To do list
    // ==============================================================
    $(".list-task li label").click(function () {
        $(this).toggleClass("task-done");
    });

    // ==============================================================
    // Collapsable cards
    // ==============================================================
    $('a[data-action="collapse"]').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.card').find('[data-action="collapse"] i').toggleClass('ti-minus ti-plus');
        $(this).closest('.card').children('.card-body').collapse('toggle');
    });
    // Toggle fullscreen
    $('a[data-action="expand"]').on('click', function (e) {
        e.preventDefault();
        $(this).closest('.card').find('[data-action="expand"] i').toggleClass('mdi-arrow-expand mdi-arrow-compress');
        $(this).closest('.card').toggleClass('card-fullscreen');
    });
    // Close Card
    $('a[data-action="close"]').on('click', function () {
        $(this).closest('.card').removeClass().slideUp('fast');
    });
    // ==============================================================
    // LThis is for mega menu
    // ==============================================================
    $(document).on('click', '.mega-dropdown', function (e) {
        e.stopPropagation()
    });
    // ==============================================================
    // Last month earning
    // ==============================================================
    $('#monthchart').sparkline([5, 6, 2, 9, 4, 7, 10, 12], {
        type: 'bar',
        height: '35',
        barWidth: '4',
        resize: true,
        barSpacing: '4',
        barColor: '#1e88e5'
    });
    $('#lastmonthchart').sparkline([5, 6, 2, 9, 4, 7, 10, 12], {
        type: 'bar',
        height: '35',
        barWidth: '4',
        resize: true,
        barSpacing: '4',
        barColor: '#7460ee'
    });
    var sparkResize;

    // ==============================================================
    // This is for the innerleft sidebar
    // ==============================================================
    $(".show-left-part").on('click', function () {
        $('.left-part').toggleClass('show-panel');
        $('.show-left-part').toggleClass('ti-menu');
    });

    // For Custom File Input
    $('.custom-file-input').on('change', function () {
        //get the file name
        var fileName = $(this).val();
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    });

    $('#ctracing').DataTable();
    
    if($("#mapid").length){
        var mymap = L.map('mapid').setView([10.6342877,122.9324966], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoicmF5dmVuam0iLCJhIjoiY2tmMjNvbnFoMWVzMTJ2cDN2eHpmZzNjZSJ9.C1e6ZYTvg-xVUFRkoDrLCw'
        }).addTo(mymap);
    }
    
    $("#Form").on("click",function(e){ 
        console.log(e);
        e.preventDefault();
        var form = $(this).parents('form');
        if(validator()){
            Swal.fire({
                title: "Are you sure?",
                text: "Confirm Submission?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Confirm",
                closeOnConfirm: false
            }).then( confirm=>{
                if (confirm.value) {
                    form.submit();
                }
                else{
                    Swal.fire({
                        title: "Okay!",
                        text: "Submission Cancelled",
                        type: "error",
                    })
                }
            });
        }
    });

    if(typeof error !== 'undefined'){
        Swal.fire({
            title: title,
            text: text,
            type: "error",
        });
    }
});

function validator(){
    var valid = true;
    var numeric = true;
    var password = true;

    $(".required").each(function(e){
        if($(this).val()==""){
            $(this).addClass("is-invalid");
            valid = false;
        }
        else{
            $(this).removeClass("is-invalid");
        }
    });

    $(".numeric").each(function(e){
        console.log($.isNumeric($(this).val()));
        if(!$.isNumeric($(this).val())){
            $(this).addClass("is-invalid");
            numeric = false;
        }
    });
    var pass;
    $(".password").each(function(i,e){
        console.log($(this).val());
        if(i==0){pass = $(this).val()}
        else if($(this).val()!=pass){
            console.log($(this).val()!=pass);
            password = false;
        }
    });

    if(!valid){
        Swal.fire({
            title: "Data Missing!",
            text: "Please fill in required fields!",
            type: "error",
        })
    } else if(!numeric){
        Swal.fire({
            title: "Data must be numeric!",
            text: "Fields must be numeric!",
            type: "error",
        })
    } else if(!password){
        Swal.fire({
            title: "Passwords not the same!",
            text: "Confirm password must be the same as your password!",
            type: "error",
        })
    }

    return (valid && numeric && password);
}