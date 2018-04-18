"use strict";
/*-----------------------------------------
    NoUiSlider - Property Fields

    1. Price Range
    2. Area Size
    3. Lot Size
    4. Year Built
------------------------------------------*/


// 1. Price Range

if ($('#property-price-range')[0]) {
    var propertyPriceRange = document.getElementById('property-price-range');
    var propertyPriceRangeValues = [
        document.getElementById('property-price-upper'),
        document.getElementById('property-price-lower')
    ]

    noUiSlider.create (propertyPriceRange, {
        start: [0, 5000],
        connect: true,
        step: 50,
        range: {
            'min': 0,
            'max': 5000
        }
    });

    propertyPriceRange.noUiSlider.on('update', function( values, handle ) {
        propertyPriceRangeValues[handle].innerHTML = values[handle];
        var maxRent = $('#property-price-lower').text();
        if(maxRent > 4999){
            $('#property-price-lower').text('No Max');
        }
    });

}

// 2. Property Area Size


if ($('#available-date-range')[0]) {

    var str = '04/18/2018';
    function timestamp(str){
        return new Date(str).getTime();   
    }

    var availableDateRange = document.getElementById('available-date-range');
    var availableDateRange = [
        document.getElementById('available-date-upper'),
        document.getElementById('available-date-lower')
    ]

    noUiSlider.create (availableDateRange, {
        // Create two timestamps to define a range.
        range: {
            min: timestamp('2010'),
            max: timestamp('2016')
        }

/*         // Steps of one week
            step: 7 * 24 * 60 * 60 * 1000,

        // Two more timestamps indicate the handle starting positions.
            start: [ timestamp('2011'), timestamp('2015') ],

        // No decimals
            format: wNumb({
                decimals: 0
            }) */
    });

    availableDateRange.noUiSlider.on('update', function( values, handle ) {
        dateValues[handle].innerHTML = formatDate(new Date(+values[handle]));
    });

    // Create a list of day and monthnames.
    var
    weekdays = [
        "Sunday", "Monday", "Tuesday",
        "Wednesday", "Thursday", "Friday",
        "Saturday"
    ],
    months = [
        "January", "February", "March",
        "April", "May", "June", "July",
        "August", "September", "October",
        "November", "December"
    ];

    // Append a suffix to dates.
    // Example: 23 => 23rd, 1 => 1st.
    function nth (d) {
    if(d>3 && d<21) return 'th';
    switch (d % 10) {
        case 1:  return "st";
        case 2:  return "nd";
        case 3:  return "rd";
        default: return "th";
    }
    }

    // Create a string representation of the date.
    function formatDate ( date ) {
    return weekdays[date.getDay()] + ", " +
        date.getDate() + nth(date.getDate()) + " " +
        months[date.getMonth()] + " " +
        date.getFullYear();
    }
}

// 3. Property Area Size

if ($('#property-area-range')[0]) {
    var propertyAreaRange = document.getElementById('property-area-range');
    var propertyAreaRangeValues = [
        document.getElementById('property-area-upper'),
        document.getElementById('property-area-lower')
    ]

    noUiSlider.create (propertyAreaRange, {
        start: [0, 10000],
        connect: true,
        step: 100,
        range: {
            'min': 0,
            'max': 10000
        }
    });

    propertyAreaRange.noUiSlider.on('update', function( values, handle ) {
        propertyAreaRangeValues[handle].innerHTML = values[handle];
        var maxSize = $('#property-area-lower').text();
        if(maxSize > 9999){
            $('#property-area-lower').text('No Max');
        }
    });
}

// 4. Lot Size

if ($('#property-lot-range')[0]) {
    var propertyLotRange = document.getElementById('property-lot-range');
    var propertyLotRangeValues = [
        document.getElementById('property-lot-upper'),
        document.getElementById('property-lot-lower')
    ]

    noUiSlider.create (propertyLotRange, {
        start: [1000, 5000],
        connect: true,
        range: {
            'min': 1000,
            'max': 5000
        }
    });

    propertyLotRange.noUiSlider.on('update', function( values, handle ) {
        propertyLotRangeValues[handle].innerHTML = values[handle];
    });
}

// 3. Year Built

if ($('#property-year-built')[0]) {
    var propertyYbRange = document.getElementById('property-year-built');
    var propertyYbRangeValues = [
        document.getElementById('property-yb-upper'),
        document.getElementById('property-yb-lower')
    ]

    noUiSlider.create (propertyYbRange, {
        start: [1990, 2016],
        connect: true,
        range: {
            'min': 1990,
            'max': 2016
        }
    });

    propertyYbRange.noUiSlider.on('update', function( values, handle ) {
        propertyYbRangeValues[handle].innerHTML = Math.round(values[handle]);
    });
}



$(document).ready(function () {
    /*-----------------------------------------------------
        Submit property steps switch
        - used in last form tab of 'submit-property.html'
    ------------------------------------------------------*/
    $('body').on('shown.bs.tab', '.submit-property__button', function () {
        var currentTab = $(this).attr('href');

        $('.submit-property__steps > li').removeClass('active');
        $('.submit-property__steps > li > a[href='+currentTab+']').parent().addClass('active');
    })


    /*-----------------------------------------------------
         Calendar and Calendar Widget
         - Used in dashboard index and calendar pages
    ------------------------------------------------------*/
    if($('#calendar-widget')[0]) {
        $('.calendar-widget__body').fullCalendar({
            contentHeight: 'auto',
            theme: false,
            header: {
                right: 'next',
                center: 'title, ',
                left: 'prev'
            },
            buttonIcons: {
                prev: 'left',
                next: 'right',
            },
            defaultDate: '2016-08-12',
            editable: true,
            events: [
                {
                    title: 'Dolor Pellentesque',
                    start: '2016-08-01',
                    className: 'fc-event--cyan'
                },
                {
                    title: 'Purus Nibh',
                    start: '2016-08-07',
                    className: 'fc-event--amber'
                },
                {
                    title: 'Amet Condimentum',
                    start: '2016-08-09',
                    className: 'fc-event--green'
                },
                {
                    title: 'Tellus',
                    start: '2016-08-12',
                    className: 'fc-event--blue'
                },
                {
                    title: 'Vestibulum',
                    start: '2016-08-18',
                    className: 'fc-event--cyan'
                },
                {
                    title: 'Ipsum',
                    start: '2016-08-24',
                    className: 'fc-event--teal'
                },
                {
                    title: 'Fringilla Sit',
                    start: '2016-08-27',
                    className: 'fc-event--blue'
                },
                {
                    title: 'Amet Pharetra',
                    url: 'http://google.com/',
                    start: '2016-08-30',
                    className: 'mdc-bg-amber-500'
                }
            ]
        });

        //Display Current Date as Calendar widget header
        var mYear = moment().format('YYYY');
        var mDay = moment().format('dddd, MMM D');
        $('.calendar-widget__year').html(mYear);
        $('.calendar-widget__day').html(mDay);
    }


    /*-----------------------------------------------------
        Demo list delete
        - Used in dashboaed/listings.html
    ------------------------------------------------------*/
    if($('[data-demo-action="delete-listing"]')[0]) {
        $('[data-demo-action="delete-listing"]').click(function (e) {
            e.preventDefault();

            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function() {
                swal(
                    'Deleted!',
                    'Your list has been deleted.',
                    'success'
                );
            })
        });
    }

});




