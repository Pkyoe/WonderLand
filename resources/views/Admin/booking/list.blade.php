@extends('Admin.layout.master')

@section('title', 'Booking list')

@section('content')
    <div class="container-fluid mt-5">

        <!-- Page Heading -->
        <div class="d-sm-flex  align-items-center justify-content-between mb-4">
            <h1 style="color: #212529;" class="h3 mb-0 ">Booking List</h1>

        </div>

        @if (session('orderAcceptSuccess'))
            <div class="col-4 offset-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check"></i> {{ session('orderAcceptSuccess') }}
                </div>
            </div>
        @endif

        @if (session('orderRejectSuccess'))
            <div class="col-4 offset-8">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-check"></i> {{ session('orderRejectSuccess') }}
                </div>
            </div>
        @endif
        <div class="dropdown p-2 m-1 ">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="background-color: #3498db; border:none;">
                Categories
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item filter-category" data-category-id="All">All</a></li>
                @foreach ($categories as $c)
                    <li><a class="dropdown-item filter-category"
                            data-category-id="{{ $c->id }}">{{ $c->name }}</a></li>
                @endforeach
            </ul>
            <input type="hidden" id="selectedCategory" class="form-control" placeholder="From Date">

        </div>
        <div class="row mb-3">
            <div class="col-md-5">
                <input type="date" id="from_date" class="form-control" placeholder="From Date">
            </div>
            <div class="col-md-5">
                <input type="date" id="to_date" class="form-control" placeholder="To Date">
            </div>
            <div class="col-md-2">
                <button id="filter" class="btn btn-dark" style="background-color: #3498db; border:none;">Search</button>
            </div>
        </div>
        {{-- <a href="{{ route('pdf.generate')}}" target="_blank" class=" text-decoration-none text-white btn btn-sm btn-dark"><i class="fa-solid fa-file-pdf"></i> Download</a> --}}
        <a href="#" id="pdfDownload" target="_blank" class="text-decoration-none text-white btn btn-sm btn-dark" style="background-color: #3498db; border:none;">
            <i class="fa-solid fa-file-pdf" ></i> Download
        </a>
        <!-- Content Row -->

        <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-12 card shadow-lg">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            
                            <th scope="col">Address</th>
                            <th scope="col">Package</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @include('Admin.pagination.tbody', ['booking' => $booking])
                    </tbody>
                </table>
                <div class="pagination-container">
                    {{ $booking->links('pagination::bootstrap-5') }}
                </div>
            </div>


        </div>

        <!-- Content Row -->
    </div>

    <br>

@endsection
@section('script')
    {{-- <script>
        $(document).ready(function() {
            // Handle category filter selection
            $(document).on('click', '.dropdown-item', function(e) {
                e.preventDefault();
                var categoryId = $(this).data('category-id');
                fetchBookings('/booking/list-filter/' + categoryId);
            });

            // Handle date range filter
            $('#filter').click(function() {
                var from_date = $('#from_date').val();
                var to_date = $('#to_date').val();
                fetchBookings("{{ route('filter.data') }}", from_date, to_date);
            });

            // Fetch bookings with optional date range
            function fetchBookings(url, from_date = '', to_date = '') {
                $.ajax({
                    url: url,
                    method: 'GET',
                    data: {
                        from_date: from_date,
                        to_date: to_date
                    },
                    success: function(response) {
                        $('tbody').html(response.tableRows);
                        $('.pagination').html(response.paginationLinks);

                        // Update the PDF download link with the filtered dates
                        updatePdfLink(from_date, to_date);
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', xhr.responseText);
                    }
                });
            }

            // Update the PDF download link based on the current filter state
            function updatePdfLink(from_date, to_date) {
                var pdfUrl = "{{ route('pdf.generate') }}";
                if (from_date && to_date) {
                    pdfUrl += "?from_date=" + encodeURIComponent(from_date) + "&to_date=" + encodeURIComponent(
                        to_date);
                }

                $('#pdfDownload').attr('href', pdfUrl);
            }

            // Handle pagination link clicks
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                var from_date = $('#from_date').val(); // Get current filter values
                var to_date = $('#to_date').val();
                fetchBookings(url, from_date, to_date);
            });

            // Initialize the PDF download link on page load (no filter applied initially)
            updatePdfLink('', '');
        });
    </script> --}}
    <script>
      $(document).ready(function() {
    // Store selected category when dropdown item is clicked
    $(document).on('click', '.dropdown-item', function(e) {
        e.preventDefault();
        var categoryId = $(this).data('category-id');
        $('#selectedCategory').val(categoryId); // Store the selected category
        updatePdfLink($('#from_date').val(), $('#to_date').val(), categoryId);
        fetchBookings('/booking/list-filter/' + categoryId);
    });

    // Handle date range filter
    $('#filter').click(function() {
        var from_date = $('#from_date').val();
        var to_date = $('#to_date').val();
        var categoryId = $('#selectedCategory').val(); // Get the selected category
        updatePdfLink(from_date, to_date, categoryId);
        fetchBookings("{{ route('filter.data') }}", from_date, to_date, categoryId);
    });

    // Fetch bookings with optional date range and category filter
    function fetchBookings(url, from_date = '', to_date = '', categoryId = '') {
        $.ajax({
            url: url,
            method: 'GET',
            data: {
                from_date: from_date,
                to_date: to_date,
                category_id: categoryId
            },
            success: function(response) {
                $('tbody').html(response.tableRows);
                $('.pagination').html(response.paginationLinks);
                $('#from_date').val("");
                $('#to_date').val("");

            },
            error: function(xhr, status, error) {
                console.log('Error:', xhr.responseText);
            }
        });
    }

    // Update the PDF download link based on the current filter state
    function updatePdfLink(from_date, to_date, categoryId) {
        var pdfUrl = "{{ route('pdf.generate') }}";
        var params = [];
        if (from_date) {
            params.push("from_date=" + encodeURIComponent(from_date));
        }
        if (to_date) {
            params.push("to_date=" + encodeURIComponent(to_date));
        }
        if (categoryId) {
            params.push("category_id=" + encodeURIComponent(categoryId));
        }

        if (params.length > 0) {
            pdfUrl += "?" + params.join("&");
        }

        $('#pdfDownload').attr('href', pdfUrl);
    }

    // Handle pagination link clicks
    $(document).on('click', '.pagination a', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var from_date = $('#from_date').val(); // Get current filter values
        var to_date = $('#to_date').val();
        var categoryId = $('#selectedCategory').val();
        fetchBookings(url, from_date, to_date, categoryId);
    });

    // Initialize the PDF download link on page load (no filter applied initially)
    updatePdfLink('', '', '');
});

    </script>


@endsection
