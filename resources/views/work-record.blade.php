@extends('index')
@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid bg-dark p-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-white">{{ __('header.work_records') }}</h1>
                <a href="/">{{ __('header.home') }}</a>
                <i class="bi bi-arrow-right text-primary me-2"></i>
                <a href="{{ url('/work-records') }}">{{ __('header.work_records') }}</a>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <style>
        /* Scoped styles for the table */
        #work-records-table {
            width: 100%;
            border-collapse: collapse; /* Remove spacing between cells */
            border-radius: 8px; /* Add rounded corners to the table */
            overflow: hidden; /* Ensure the corners are rounded */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add a subtle shadow */
        }

        #work-records-table th,
        #work-records-table td {
            border: 1px solid #ccc; /* Add borders to cells */
            padding: 8px; /* Add padding for better spacing */
            text-align: left; /* Align text to the left */
            cursor: pointer;
        }

        #work-records-table th {
            background-color: #337dfe; /* Header background color */
            color: white; /* Header text color */
            font-weight: bold; /* Bold header text */
            cursor: default;
        }

        /* Fixed column widths */
        #work-records-table th:nth-child(1),
        #work-records-table td:nth-child(1) {
            width: 10%; /* Country column */
            padding: 16px 10px;
        }

        #work-records-table th:nth-child(2),
        #work-records-table td:nth-child(2) {
            width: 50%; /* Project column */
        }

        #work-records-table th:nth-child(3),
        #work-records-table td:nth-child(3) {
            width: 20%; /* Client column */
        }

        #work-records-table th:nth-child(4),
        #work-records-table td:nth-child(4) {
            width: 20%; /* Period column */
        }

        /* Accordion button styling */
        .accordion-button {
            width: 100%;
            text-align: left;
            background-color: transparent;
            border: none;
            padding: 0;
        }

        .accordion-button:focus {
            box-shadow: none; /* Remove Bootstrap's default focus shadow */
        }

        .accordion-button:not(.collapsed) {
            background-color: transparent; /* Ensure no background color when expanded */
        }

        /* Accordion body styling */
        .accordion-body {
            padding: 16px;
            background-color: #f8f9fa; /* Light background for accordion body */
            cursor: default;
        }

        /* Responsive table styles */
        @media (max-width: 768px) {
            #work-records-table {
                display: block;
                overflow-x: auto; /* Enable horizontal scrolling on small screens */
            }

            #work-records-table th,
            #work-records-table td {
                white-space: nowrap; /* Prevent text wrapping */
            }

            #work-records-table th:nth-child(1),
            #work-records-table td:nth-child(1),
            #work-records-table th:nth-child(2),
            #work-records-table td:nth-child(2),
            #work-records-table th:nth-child(3),
            #work-records-table td:nth-child(3),
            #work-records-table th:nth-child(4),
            #work-records-table td:nth-child(4) {
                width: auto; /* Allow columns to shrink on small screens */
            }

            .accordion-body {
                white-space: normal; /* Allow text wrapping in accordion body */
            }
        }
    </style>

    <!-- Work Record Start -->
    <div class="container-fluid bg-secondary p-0">
        <div class="row g-0">
            <div class="col-lg-12 py-6 px-5">
                <div class="text-justify mx-auto mb-5" style="max-width: 1200px;">
                    <div class="container">
                        <div class="table-responsive"> <!-- Bootstrap responsive table wrapper -->
                            <table id="work-records-table">
                                <!-- Table Header -->
                                <thead>
                                    <tr>
                                        <th>{{ __('workrecords.country') }}</th>
                                        <th>{{ __('workrecords.project') }}</th>
                                        <th>{{ __('workrecords.client') }}</th>
                                        <th>{{ __('workrecords.period') }}</th>
                                    </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($workrecords as $workrecord)
                                        <tr data-bs-toggle="collapse" data-bs-target="#collapse-{{ $workrecord->id }}" aria-expanded="false" aria-controls="collapse-{{ $workrecord->id }}">
                                            <td>{{ $workrecord->country }}</td>
                                            <td>{{ $workrecord->project }}</td>
                                            <td>{{ $workrecord->client }}</td>
                                            <td>{{ $workrecord->period }}</td>
                                        </tr>
                                        <!-- Accordion Body -->
                                        <tr>
                                            <td colspan="4" class="p-0">
                                                <div id="collapse-{{ $workrecord->id }}" class="accordion-collapse collapse" data-bs-parent="#work-records-table">
                                                    <div class="accordion-body" style="text-align: justify;">
                                                        <p style="text-align: justify;">{!! $workrecord->description !!}</p>
                                                        <!-- Add more details here if needed -->
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Work Record End -->
@endsection