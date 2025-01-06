<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .receipt-container {
            width: 100%;
        }

        .details {
            margin: 20px 0;
        }
        .details p {
            margin: 1px 0;
        }
        .table-container {
            width: 100%;
            border-collapse: collapse;
        }
        /*.table-container, .table-container th, .table-container td {*/
        /*    border: 1px solid black;*/
        /*}*/
        .table-container th, .table-container td {
            padding: 8px;
            text-align: left;
        }
        .footer {
            margin-top: 20px;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer div {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .footer .center-head, .footer .student-signature {
            width: 45%;
            text-align: start;
        }
        .note {
            margin-top: 20px;
            font-size: 12px;
            text-align: center;
        }
        .d-flex{
            display:flex;
            align-items:center;
            justify-content:space-between;
        }
        .container { padding: 20px; }
        .header { font-size: 18px; font-weight: bold; margin-bottom: 20px; color: #4B5563; } /* Darker gray */
        .grid {
            display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; }
        .label { font-size: 14px; color: #9CA3AF; } /* Lighter gray */
        .value { font-size: 16px; font-weight: bold; color: #374151; } /* Dark gray */
        .image { grid-column: 1 / 2; }
        .image img { width: 100px; height: 100px; object-fit: cover; border-radius: 8px; }
        td{
            vertical-align: baseline;
        }
        p{
            margin-bottom: 10px !important;
        }
        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.1;
            z-index: -1;
            width: 400px; /* Adjust as needed */
        }
    </style>
</head>
<body>
    <img src="https://i.ibb.co/hFV8BfC/20240416-175528-1.png" class="watermark" alt="Watermark">
    <div class="receipt-container">
        <div class="header">
            <table class="table-container" style="border: none !important;">
                <tr align="center">
                    <td style="border: none !important; text-align:center;">
                        <img src="https://i.ibb.co/hFV8BfC/20240416-175528-1.png" alt="LOGO IMAGE" style="width:100px !important;">
                    </td>
                </tr>
                <tr align="center">
                    <td style="border: none !important;">
                        <p style="text-align: center;margin:0px; color:black">DOMOHONA PHARMACY COLLEGE</p>
                    </td>
                </tr>
            </table>


            <table class="table-container" style="border: none !important;">
                <tr align="center">
                    <td style="border: none !important;"><p style="font-size: 14px !important;text-align:center;margin:0px; color:grey">Address:AT+P.O DOMOHONA P.S KARANDIGHI DIST. UTTAR DINAJPUR, W.B -733215</p></td>
                </tr>
            </table>
        </div>
        <table class="table-container" style="border: none !important;">
            <tr align="center">
                <td style="border: none !important;">
                    <div class="container">
                        <div class="header">Personal</div>
                        <div class="grid">
                            <div class="image">
                                <span class="label">Image</span><br>
                                <img src="{{ getStudentImage($student->id) }}" alt="Student Image">
                            </div>
                            <div>
                                <span class="label">First Name</span><br>
                                <span class="value">{{ $student->first_name }}</span>
                            </div>
                            <div>
                                <span class="label">Last Name</span><br>
                                <span class="value">{{ $student->last_name }}</span>
                            </div>
                           
                        </div>
                    </div>
                </td>
                <td>
                       
                             <div>
                                <span class="label">DOB</span><br>
                                <span class="value">{{ $student->dob }}</span>
                            </div>
                            <div>
                                <span class="label">Admission Date</span><br>
                                <span class="value">{{ $student->admission_date }}</span>
                            </div>
                            <!--<div>-->
                            <!--    <span class="label">Temporary Address</span><br>-->
                            <!--    <span class="value">{{ $student->temporary_address }}</span>-->
                            <!--</div>-->
                            <div>
                                <span class="label">Permanent Address</span><br>
                                <span class="value">{{ $student->permanent_address }}</span>
                            </div>
                            <div>
                                <span class="label">Reference Number</span><br>
                                <span class="value">{{ $student->reference_number }}</span>
                            </div>
                            <div>
                                <span class="label">Registration Number</span><br>
                                <span class="value">{{ $student->enroll_number }}</span>
                            </div>
                            <div>
                                <span class="label">Student ID</span><br>
                                <span class="value">{{ $student->student_unique_id }}</span>
                            </div>
                    
                </td>
                <td>
                     <div>
                                <span class="label">Email</span><br>
                                <span class="value">{{ $student->email }}</span>
                            </div>
                            <div>
                                <span class="label">Phone</span><br>
                                <span class="value">{{ $student->phone }}</span>
                            </div>
                            <div>
                                <span class="label">Gender</span><br>
                                <span class="value">{{ $student->gender }}</span>
                            </div>
                </td>
               
                <!--<td style="border: none !important;">-->
                <!--    <div class="container">-->
                <!--        <div class="header">Background Information</div>-->
                <!--        <div class="grid">-->
                <!--            <div>-->
                <!--                <span class="label">School Name</span><br>-->
                <!--                <p>{{ $student->bg_school_name }}</p>-->
                <!--            </div>-->
                <!--            <div>-->
                <!--                <span class="label">Department Name</span><br>-->
                <!--                <p>{{ $student->bg_class_name }}</p>-->
                <!--            </div>-->
                <!--            <div>-->
                <!--                <span class="label">Department Name</span><br>-->
                <!--                <p>{{ $student->bg_class_name }}</p>-->
                <!--            </div>-->
                <!--            <div>-->
                <!--                <span class="label">School Leave Certificate</span><br>-->
                <!--                <p>{{ $student->school_leave_certificate }}</p>-->
                <!--            </div>-->
                <!--            <div>-->
                <!--                <span class="label">Mark Sheet</span><br>-->
                <!--                <p>{{ $student->mark_sheet }}</p>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</td>-->
                
            </tr>
            <tr>
                <td style="border: none !important;">
                    <div class="container">
                        <div class="header">Parent History</div>
                        <div class="grid">
                            <div>
                                <span class="label">Guardian Name</span><br>
                                <p>{{ $student['parent']['name'] }}</p>
                            </div>
                            <!--<div>-->
                            <!--    <span class="label">Email</span><br>-->
                            <!--    <p>{{ $student['parent']['email'] }}</p>-->
                            <!--</div>-->
                            <div>
                                <span class="label">Guardian Phone Number</span><br>
                                <p>{{ $student['parent']['phone'] }}</p>
                            </div>
                            <!--<div>-->
                            <!--    <span class="label">Emergency Phone</span><br>-->
                            <!--    <p>{{ $student['parent']['emergency_phone'] }}</p>-->
                            <!--</div>-->
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="border: none !important;">
                    <div class="container">
                        <div class="header">Department Assign</div>
                        <div class="grid">
                            <div>
                                <span class="label">Course Name</span><br>
                                @foreach ($student->assignClasses as $assignment)
                                    <p>{{ $assignment->class->name }}</p>
                                @endforeach
                            </div>
                            <div>
                                <span class="label">Year</span><br>
                                @foreach ($student->assignClasses as $assignment)
                                    <p>{{ $assignment->section->name }}</p>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </td>
            </tr>
            <!--<tr align="center">-->
            <!--    <td style="border: none !important;">-->
            <!--        <div class="container">-->
            <!--            <div class="header">Department Assign</div>-->
            <!--            <div class="grid">-->
            <!--                <div>-->
            <!--                    <span class="label">Course Name</span><br>-->
            <!--                    @foreach ($student->assignClasses as $assignment)-->
            <!--                        <p>{{ $assignment->class->name }}</p>-->
            <!--                    @endforeach-->
            <!--                </div>-->
            <!--                <div>-->
            <!--                    <span class="label">Year</span><br>-->
            <!--                    @foreach ($student->assignClasses as $assignment)-->
            <!--                        <p>{{ $assignment->section->name }}</p>-->
            <!--                    @endforeach-->
            <!--                </div>-->

            <!--            </div>-->
            <!--        </div>-->
            <!--    </td>-->
            <!--</tr>-->
        </table>


    </div>
</body>
</html>
