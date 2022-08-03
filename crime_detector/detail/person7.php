<!DOCTYPE html>

<head>
    <title>Crime Detector</title>
    <link href="person.css" rel="stylesheet" type="text/css" />



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Place', 'Crime frequency'],
                ['Triveni Sangam', 1],
                ['Anand Bhavan', 6],
                ['Hanuman Mandir', 10],
                ['Chandrashekhar Azad Park', 12],
                ['Khusro Bagh', 7]
            ]);

            var options = {
                title: 'Active regions of crime'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>

</head>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
<!-- Bootstrap CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>


<div class="student-profile py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent text-center">
                        <img class="profile_img" src="../image/7.jpeg" alt="student dp">
                        <h3>John Paul</h3>
                    </div>
                    <div class="card-body">
                        <p class="mb-0"><strong class="pr-1">Identification Number:</strong>321000001</p>
                        <p class="mb-0"><strong class="pr-1">Crime:</strong>Thief</p>
                        <p class="mb-0"><strong class="pr-1">Place:</strong>Dausa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Last Crime Date</th>
                                <td width="2%">:</td>
                                <td>25 September 2020</td>
                            </tr>
                            <tr>
                                <th width="30%">Duration of Imprisoned </th>
                                <td width="2%">:</td>
                                <td>5 Years</td>
                            </tr>
                            <tr>
                                <th width="30%">Gender</th>
                                <td width="2%">:</td>
                                <td>Male</td>
                            </tr>
                            <tr>
                                <th width="30%">Jail Name</th>
                                <td width="2%">:</td>
                                <td>Jaipur Jail</td>
                            </tr>
                            <tr>
                                <th width="30%">Blood Group</th>
                                <td width="2%">:</td>
                                <td>O+</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div style="height: 26px"></div>
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
                    </div>
                    <div class="card-body pt-0">
                        <p>John Paul was born in Faridkot village in the Okara District of Punjab, Pakistan, to Amir Shahban Kasab and Noor Illahi.[15] His father ran a snack cart[16][17] while his elder brother, Afzal, worked as a labourer in Lahore.[17] His elder sister, Rukaiyya Husain, was married and lived in the village.[17] A younger sister, Suraiyya, and brother, Munir, lived in Faridkot with their parents.[17][18] The family belongs to the Qassab community.</p>
                    </div>
                </div>

                <div style="height: 26px"></div>
                <div class="card shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Frequency Table</h3>
                    </div>
                    <div id="piechart" style="width: 900px; height: 500px;padding-right:400px"></div>
                    <div class="card-body pt-0">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>