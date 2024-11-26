<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
</head>
<body>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Id</th>
                    <th scope="col">Age</th>
                    <th scope="col">Course</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = [
                    [
                        "name" => "Taha",
                        "id" => 311,
                        "age" => 17,
                        "course" => "DISM"
                    ],
                    [
                        "name" => "Hassan",
                        "id" => 312,
                        "age" => 18,
                        "course" => "DISM"
                    ],
                    [
                        "name" => "Hussain",
                        "id" => 313,
                        "age" => 17,
                        "course" => "DISM"
                    ],
                    [
                        "name" => "Zain",
                        "id" => 314,
                        "age" => 17,
                        "course" => "DISM"
                    ],
                    [
                        "name" => "Muhammad",
                        "id" => 315,
                        "age" => 18,
                        "course" => "DISM"
                    ]
                ];

                foreach ($data as $student) {
                ?>
                    <tr>
                    <?php
                    foreach ($student as $key => $value) {
                    ?>
                        

                       <td><?php echo $value; ?></td>
                       <?php
                        }   
                        ?> 
                    </tr>
                    <?php
                   
                }
                ?>
            </tbody>
        </table>
    </div>