<div class="main-panel">
    <nav class="navbar navbar-transparent navbar-absolute">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Student Overview</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">dashboard</i>
                            <p class="hidden-lg hidden-md">Dashboard</p>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="hidden-lg hidden-md">Notifications</p>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mike John responded to your email</a></li>
                            <li><a href="#">You have 5 new tasks</a></li>
                            <li><a href="#">You're now friend with Andrew</a></li>
                            <li><a href="#">Another Notification</a></li>
                            <li><a href="#">Another One</a></li>
                        </ul>
                    </li>
                    <li>
                        
                        <i class="material-icons">account_circle</i>
                        <?php
                        if ($this->session->userdata('logged')) {
                            $user = $this->session->userdata('user');
                            if ($this->session->userdata('version') == 'Student') {
                                $username = $user[0]['fname'] . ' ' . $user[0]['lname'];
                            } else {
                                $username = $user[0]['name'];
                            }
                            echo "<p class=''>$username</p>";
                        }


                        ?>
                        
                    </li>
                   
                </ul>
        
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group is-empty dropdown" style="">
                        <input type="text" class="form-control dropdown-toggle" id="search" data-toggle="dropdown"
                               placeholder="Search" <?php if ($this->session->userdata('version') == 'Student') {
                            echo 'disabled';
                        } ?>>
                        <span class="material-input"></span>
                        <div class="card-content">
                            <ul id="finalResults" class="dropdown-menu"></ul>
                        </div>
                    </div>

                    <button type="submit"
                            class="btn btn-white btn-round btn-just-icon" <?php if ($this->session->userdata('version') == 'Student') {
                        echo 'disabled';
                    } ?>>
                        <i class="material-icons">search</i>

                    </button>


                </form>
            </div>
        </div>
    </nav>

    <div class="content">


        <div class="container-fluid">

                <!--                <a rel="" class="btn btn-primary" href="www.google.com">click</a>-->
                <!--                <button id="btn_click">click this</button>-->


            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card card-profile" style="display: none;" id="profile">
                        <div class="card-avatar">
                            <a href="#pablo">
                                <img class="img" id="proPic" src=""/>
                            </a>
                        </div>

                        <div class="content">


                            <h4 class="card-title" id="studentName"></h4>
                            <h6 class="category text-gray" id="indexNo"></h6>
                            <p class="">
                                <label id="gradeLable"></label>
                            </p>

                            <a href="#pablo" class="btn btn-sm btn-primary btn-round">More Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>


            <div class="row">
                    <div class="col-md-12">
                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="purple">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <span class="nav-tabs-title">More</span>
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="">
                                                <a href="#messages" data-toggle="tab">
                                                    <i class="material-icons">code</i>
                                                    Select student
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="messages">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <select class="dropdown-header dropdown col-md-3"
                                                                id="student_select">
                                                            <option disabled selected hidden>Select student</option>
                                                        </select>
                                                        <div class="col-md-1">

                                                        </div>
                                                        
                                                        <button class=" btn btn-success btn-sm col-md-3" id="viewBtn">View
                                                        </button>
                                                        <button class=" btn btn-dark btn-sm col-md-3" data-toggle="modal" data-target="#exampleModalCenter" id="editBtn">Edit
                                                        </button>

                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
           
            
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="green">
                            
                            <div id="rank_in_class"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title"></h4>
                            
                        </div>
                        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="orange">
                            <div id="allmarkschart"></div>
                        </div>
                        <div class="card-content">
                            <h4 class="title"></h4>
                            <p class="category"></p>
                        </div>
                        

                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="red">
                            <div id="classavgchart"></div>
                        </div>
                        <div class="card-content">
                            <!--                            <h4 class="title">Completed Tasks</h4>-->
                            <!--                            <p class="category">Last Campaign Performance</p>-->
                        </div>
                        <!--<div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-chart" data-background-color="purple">
                            <div id="cmpfirstchart"></div>
                        </div>
                        <div class="card-content">
                            <!--                            <h4 class="title">Completed Tasks</h4>-->
                            <!--                            <p class="category">Last Campaign Performance</p>-->
                        </div>
                        <!--<div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-chart" data-background-color="blue">
                        <div id="marksChart"></div>
                    </div>
                    <div class="card-content">
                        <!--                        <h4 class="title">Completed Tasks</h4>-->
                        <!--                        <p class="category">Last Campaign Performance</p>-->
                    </div>
                    <!--<div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> campaign sent 2 days ago
                        </div>
                    </div>-->
                </div>
            </div>



            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6" style="display: none" id="cmp_student_subject_div">
                    <div class="card">
                        <div class="card-header card-chart"
                             data-background-color="pink">
                            <div id="cmp_with_student_subject_chart"></div>
                        </div>
                        <div class="card-content">
                            <!--                        <h4 class="title">Completed Tasks</h4>-->
                            <!--                        <p class="category">Last Campaign Performance</p>-->
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-6" style="display: none" id="cmp_student_subject_avg_div">
                    <div class="card">
                        <div class="card-header card-chart"
                             data-background-color="pink">
                            <div id="cmp_with_student_subject_avg_chart"></div>
                        </div>
                        <div class="card-content">
                            <!--                        <h4 class="title">Completed Tasks</h4>-->
                            <!--                        <p class="category">Last Campaign Performance</p>-->
                        </div>
                        <!--<div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>-->
                    </div>
                </div>
                <div class="col-lg-6 col-md-12" style="display: none" id="cmp_student_subject_table_div">
                    <div class="card">
                        <div class="card-header" data-background-color="orange">
                            <h4 class="title">Compare Alec with <i>John</i> on Mathematics</h4>
                            <p class="category">3<sup>rd</sup> term test: September, 2016</p>
                        </div>
                        <div class="card-content table-responsive">

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

        </div>
         <!-- Modal -->
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Edit Student Marks</h5>
                </div>
                <div class="modal-body">
                    <div class="row mb-6">
                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="selectGrade">Grade</label>
                                </div>
                                <select class="custom-select" id="selectGrade">
                                    <option selected>Choose...</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                </select>
                            </div>
                        </div> <!-- one col ends -->

                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="selectClass">class</label>
                                </div>
                                <select class="custom-select" id="selectClass">
                                    <option selected>Choose...</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                </select>
                            </div>
                        </div> <!-- one col ends -->

                        <div class="col-md-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="selectTerm">term</label>
                                </div>
                                <select class="custom-select" id="selectTerm">
                                    <option selected>Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="2">3</option>
                                </select>
                            </div>
                        </div> <!-- one col ends -->
                        
                    </div>

                    <div class="row">
                    <button type="button" class="btn btn-info btn-block" id="btn-search-edit">search</button>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Sinhala_input">sinhala</label>
                                <input type="text" class="form-control" id="Sinhala_input">   
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Maths_input">maths</label>
                                <input type="text" class="form-control" id="Maths_input">   
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Science_input">science</label>
                                <input type="text" class="form-control" id="Science_input">   
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="History_input">history</label>
                                <input type="text" class="form-control" id="History_input">   
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Buddhism_input">Buddhism</label>
                                <input type="text" class="form-control" id="Buddhism_input">   
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="English_input">english</label>
                                <input type="text" class="form-control" id="English_input">   
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="IT_input">it</label>
                                <input type="text" class="form-control" id="IT_input">   
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="Commerce_input">Commerce</label>
                                <input type="text" class="form-control" id="Commerce_input">   
                            </div>
                        </div>

                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="btn-edit-close" >Close</button>
                    <button type="button" class="btn btn-danger" id="btn-save-marks">Save changes</button>
                </div>
            </div>
        </div>
        </div>  
    </footer>
</div>



<script src="<?php echo base_url() ?>assets/js/highchart/exporting.js"></script>
<script src="<?php echo base_url() ?>assets/js/highchart/highcharts.js"></script>

<script src="<?php echo base_url() ?>assets/js/dashboard_charts.js" type="text/javascript">


</script>


<script type="text/javascript">

    searched_student_index = '';
    const subjects = ["Sinhala", "Maths", "Science", "History", "Buddhism", "English", "IT","Commerce"];

    function modal_hide() {
        subjects.map((e, i) => {
            $("#"+subjects[i]+"_input").val('');
        })

        $('#exampleModalCenter').modal('hide');
    }

    $('document').ready(function () {

        $('#btn-edit-close').click(function(){
            modal_hide();
        });

        $('#btn-save-marks').click(function(e){

            selectGrade = $("#selectGrade").val();
            selectClass = $("#selectClass").val();
            selectTerm = $("#selectTerm").val();

            const marks = subjects.map((elem, i) => {
                return {
                    sub: i+1,
                    mark: $("#"+subjects[i]+"_input").val()
                }
            });

            const data = {
                'grade':  selectGrade,
                'class': selectClass,
                'index': searched_student_index,
                'term': selectTerm,
                'marks': marks
            }

            $.ajax({
                type: "post",
                url: "<?php echo site_url('student/updateMarks'); ?>",
                cache: false,
                data: data,
                success : 
                (res) => {
                    let response = JSON.parse(res);
                    if (response == 1) {
                        modal_hide();
                        alert("Update Successfully!!!");
                    }else {
                        modal_hide();
                        alert("something went wrong!!!");
                    }
                },

                error: 
                function (error) {
                    console.log(error);
                }
            });
            
        });


        $("#btn-search-edit").click(function(e){
            

            selectGrade = $("#selectGrade").val();
            selectClass = $("#selectClass").val();
            selectTerm = $("#selectTerm").val();
    
            classIdObj = {
                'grade':  selectGrade,
                'class': selectClass,
                'index': searched_student_index,
                'term': selectTerm
            }

            

            //get the class id 
            $.ajax({
                type: "post",
                url: "<?php echo site_url('student/getStudentSubjectsMarks'); ?>",
                cache: false,
                data: classIdObj,
                success : 
                (res) => {
                    let marks = JSON.parse(res);
                    
                    marks.map((obj) => {
                        $("#"+subjects[obj.Subject_code-1]+"_input").val(obj.value);
                    })
                },

                error: 
                function (error) {
                    console.log(error);
                }
            })
        }); 

        $('#editBtn').click(function(e){
            // searched_student_index = $("#student_select").val();
            
        })
        

        $("#viewBtn").click(function (e) {

            $("#cmp_student_subject_div").show();
            $("#cmp_student_subject_avg_div").show();
            //  $("#cmp_student_subject_table_div").show();

            studentIndex = $("#student_select").val();
            subjectCode = $("#subject_select").val();


            /*var queryString2 = {
                'id': "1",
                'index': studentIndex
            };*/


            studentSelect("1",studentIndex);


            var subject = jQuery("#subject_select option:selected").text().substring(4);
            //console.log(subject);

            var queryString = {
                'index': studentIndex,
                'code': subjectCode,
                'student': searched_student_index
            };

            $.ajax({
                type: "post",
                url: "<?php echo site_url('student/cmp_student_subject'); ?>",
                cache: false,
                data: queryString,
                success: function (response) {


                    categories = [];
                    marks1 = [];
                    marks2 = [];


                    var obj = JSON.parse(response);
                    $.each(obj, function (i, val) {

                        $.each(val, function (j, ele) {


                            if (i == 0) {
                                categories.push('Grade ' + ele.grade + ' -' + ' term ' + ele.term);

                                marks1.push(parseInt(ele.value));

                            } else {
                                marks2.push(parseInt(ele.value));


                            }

                        });


                    });


                    queryString = {
                        'index1': searched_student_index,
                        'index2': studentIndex
                    };

                    var name1;
                    var name2;

                    $.ajax({
                        type: "post",
                        url: "<?php echo site_url('student/namesOfStudents'); ?>",
                        cache: false,
                        data: queryString,
                        success: function (response) {
                            var obj = JSON.parse(response);
                            name1 = obj.name1;
                            name2 = obj.name2;

                            drawCompareSubjectMarks(obj.name1, obj.name2, categories, marks1, marks2, subject);

                        },
                        error: function (error) {
                            console.log(error);
                        }

                    });
                    queryString = {
                        'index1': searched_student_index,
                        'index2': studentIndex,
                        'code': subjectCode
                    };
                    $.ajax({
                        type: "post",
                        url: "<?php echo site_url('student/avgMarksForStudent'); ?>",
                        cache: false,
                        data: queryString,
                        success: function (response) {
                            var obj = JSON.parse(response);
                            var data1 = obj.data1;
                            var data2 = obj.data2;

                            avgMarks1 = [];
                            avgMarks2 = [];
                            categories_for_avg = [];
                            $.each(data1, function (j, ele) {
                                avgMarks1.push(parseFloat(ele.avg));

                                if (categories_for_avg.indexOf('Grade ' + ele.grade) < 0) {
                                    categories_for_avg.push('Grade ' + ele.grade);
                                }

                            });
                            $.each(data2, function (j, ele) {
                                avgMarks2.push(parseFloat(ele.avg));
                            });

                            console.log(avgMarks1 + " " + avgMarks2 + ' ');
                            drawCompareSubjectMarksAvg(name1, name2, categories_for_avg, avgMarks1, avgMarks2, subject);
                        },
                        error: function (error) {
                            console.log(error);
                        }

                    });


                },
                error: function (error) {
                    console.log(error);
                }
            });


        });

        $("#search").keyup(function () {
            if ($("#search").val().length >= 1) {
                $.ajax({
                    type: "post",
                    url: "<?php echo site_url('student/search'); ?>",
                    cache: false,
                    data: 'search=' + $("#search").val(),
                    success: function (response) {
                        $('#finalResults').html("");
                        // alert('ok');
                        var obj = JSON.parse(response);
                        if (obj.length > 0) {
                            try {
                                var items = [];
                                // var i = 0;
                                $.each(obj, function (i, val) {
                                    console.log(val.index + " " + val.fname + " " + val.lname);

                                    items.push($("<li/>").html("<a id='" + val.index + "' href='#'" +
                                        " onclick='studentSelect(" + val.index + ")' >" + val.fname + " " + val.lname + "</a>"));

                                    //   i++;
                                });
                                $('#finalResults').append.apply($('#finalResults'), items);
                            } catch (e) {
                                alert('Exception while request..');
                            }
                        } else {
                            $('#finalResult').html($('<li/>').text("No Data Found"));
                        }

                        //   $("#finalResult").show();

                    },
                    error: function ($error) {
                        console.log($error);
                        alert($error);
                    }

                });
            }
            $('#finalResults').html("");
            return false;
        });

    });

    function studentSelect(id,index) {

        searched_student_index = index;

        $("#student_select").html("<option disabled selected hidden>Select student</option>");
        $("#subject_select").html("<option disabled selected hidden>Select subject</option>");

        $("#cmp_student_subject_div").hide();
        $("#cmp_student_subject_avg_div").hide();


        $.ajax({
            type: 'post',
            url: "<?php echo site_url('student/marks')?>",
            data: 'index=' + index,
            success: function (response) {
                // alert(response);

                drawRankInClassGraph(response);

                $("#proPic").attr("src", "<?php echo base_url() ?>assets/img/faces/" + index + ".jpg");

                $("#studentName").text($("#" + index).text());
                $("#indexNo").text("--- " + index + " ---");
                $("#profile").show();

                $("#search").val("");

                var grade;
                // Get the grade and class for specific student
                $.ajax({
                    type: 'post',
                    url: "<?php echo site_url('student/getGrade')?>",
                    data: 'index=' + index,
                    success: function (response) {

                        var obj = JSON.parse(response);
                        $.each(obj, function (i, val) {
                            grade = val.grade + " - " + val.name;
                            $("#gradeLable").text("Grade " + val.grade + " - " + val.name);
                        });

                    },
                    error: function (error) {
                        console.log(error);
                    }
                });


                //Get the  last term marks  for student
                $.ajax({
                    type: 'post',
                    url: "<?php echo site_url('student/getLastTermMarks')?>",
                    data: 'index=' + index,
                    success: function (response) {
                        var obj = JSON.parse(response);
                        var subjects;
                        var marks;
                        var terms;
                        $.each(obj, function (index, element) {
                            //console.log( element);
                            if (index === 0) {
                                terms = element;
                            }
                            if (index === 1) {
                                subjects = element;
                            }
                            if (index === 2) {
                                marks = element;
                            }

                        });


                        // console.log('index is  '+index);
                        $.ajax({
                            type: 'post',
                            url: "<?php echo site_url('student/getClassAvgMarks')?>",
                            data: 'index=' + index,

                            success: function (response) {
                                var obj = JSON.parse(response);
                                var clsAvg = [];
                                $.each(obj, function (i, val) {


                                    clsAvg.push(parseFloat(val.avg));
                                });
                                drawClassAvgGraph(subjects, terms, marks, clsAvg);

                                //  console.log('come he '+clsAvg);
                            },
                            error: function (error) {
                                console.log(error);
                            }
                        });

                        $.ajax({
                            type: 'post',
                            url: "<?php echo site_url('student/class1stMarks')?>",
                            data: 'index=' + index,

                            success: function (response) {
                                var obj = JSON.parse(response);
                                var cls1st = [];
                                $.each(obj, function (i, val) {


                                    cls1st.push(-1 * parseFloat(val));
                                });

                                drawGraphWith1stInClass(subjects, terms, marks, cls1st);

                            },
                            error: function (error) {
                                console.log(error);
                            }
                        });


                        // console.log(clsAvg+" ----- ");
//                        console.log($("#" + index).text());

                        drawLastTermMarksGraph(subjects, terms, marks, grade);


                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
                $.ajax({
                    type: 'post',
                    url: "<?php echo site_url('student/allClassAvgMarks')?>",
                    data: 'index=' + index,

                    success: function (response) {
                        var obj = JSON.parse(response);
                        var subjects = [];

                        var class_grade = [];

                        $.each(obj, function (index, element) {
                            // console.log(element.grade+ ' --- '+element.subject_name);

                            if (subjects.indexOf(element.subject_name) < 0) {
                                subjects.push(element.subject_name)
                            }


                            if (class_grade.indexOf(element.grade + ' - ' + element.class_name) < 0) {
                                class_grade.push(element.grade + ' - ' + element.class_name);
                            }

                        });

                        var series = [];
                        $.each(subjects, function (i, val) {
                            var tempMarks = [];
                            $.each(obj, function (index, element) {
                                if (element.subject_name === val) {
                                    tempMarks.push(parseFloat(element.avg));
                                }
                            });

                            var jsonObj = {
                                name: val,
                                data: tempMarks
                            };

                            series.push(jsonObj);

                        });


                        drawAvgMarksGraphsForAll(class_grade, subjects, series);

                    },
                    error: function (error) {
                        console.log(error);
                    }
                });

            },
            error: function (error) {
                console.log(error);
            }
        });


        $.ajax({
            type: 'post',
            url: "<?php echo site_url('student/allStudentsForTeacher')?>",
            data: 'id=' + id,

            success: function (response) {


                var obj = JSON.parse(response);
                $.each(obj, function (index, element) {

                    $("#student_select").append("<option value='" + element.index + "'>" + element.index + " : " + element.fname + " " + element.lname + "</option>");

                });
            },
            error: function (error) {
                console.log(error);
            }
        });
        $.ajax({
            type: 'post',
            url: "<?php echo site_url('subject/subjectForClass')?>",
            data: 'index=' + index,

            success: function (response) {


                var obj = JSON.parse(response);
                $.each(obj, function (index, element) {

                    $("#subject_select").append("<option value='" + element.code + "'>" + element.code + " : " + element.name + "</option>");

                });
            },
            error: function (error) {
                console.log(error);
            }
        });


        $.ajax({
            type: 'post',
            url: "<?php echo site_url('student/getRanks')?>",
            data: 'index=' + index,

            success: function (response) {


                var obj = JSON.parse(response);
                var years = [];
                var ranks = [];
                $.each(obj, function (index, element) {

                    years.push(index);
                    ranks.push(parseInt(element));


                });

                drawRankInClassGraph(years, ranks);
                console.log('this is it');
            },
            error: function (error) {
                console.log(error);
            }
        });


    }


    <?php
    if ($this->session->userdata('version') == 'Teacher') {

        $user = $this->session->userdata('user');
        $id = $user[0]['id'];
        $default_index = 13840;
        echo "studentSelect($id,$default_index)";
    }
    ?>

</script>
