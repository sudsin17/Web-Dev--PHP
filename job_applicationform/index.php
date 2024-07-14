<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job_application</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
    <div class="apply_box">
        <h1> Application Form
             <span class="title_small">(Web)</span>
            </h1>
            <form action="formaction.php" method = "POST" >
                <div class="form_container">

                 <div class="form_control">
                    <label for="first_name"> First Name</label>
                    <input id ="first_name" name="first_name" placeholder="enter the first name..."/>
                 </div>
                 <div class="form_control">
                    <label for="last_name"> Last Name</label>
                    <input id ="last_name" name="last_name" placeholder="enter the last name..."/>
                 </div>

                 <div class="form_control">
                    <label for="email"> Email </label>
                    <input type="email"id ="email" name="email" placeholder="enter the email..."/>
                 </div>
                 <div class="form_control">
                    <label for="job_role"> Job Role</label>
                    <select id="job_role" name="job_role">
                    <option value="">select Job role</option>
                    <option value="fronted">Fronted Developer</option>
                    <option value="backend">Backend Developer</option>
                    <option value="full_stack">Full Stack Developer</option>
                    <option value="ui_ux">UI UX Disigner</option>
                    </select>
                 </div>
                 <div class="textarea_control">
                    <label for="address"> Address </label>
                    <textarea id="address" name="address" row="4" cols="50" placeholder="Enter address"></textarea>
                 </div>
                 <div class="form_control">
                    <label for="city"> City </label>
                    <input type="text"id ="city" name="city" placeholder="enter the city..."/>
                 </div>
                 <div class="form_control">
                    <label for="pincode"> Pincode</label>
                    <input type="number" id ="pincode" name="pincode" placeholder="enter the pincode..."/>
                 </div>
                 <div class="form_control">
                    <label for="date"> Start Date</label>
                    <input value="2024-04-19"type="date" id ="date" name="date" />
                 </div>
                 <!-- <div class="form_control">
                    <label for="upload"> Upload Your Cv</label>
                    <input type="file" id ="upload" name="date" />
                 </div> -->
                 <div class="button_container">
                    <input type="submit" name="submit" value= submit ><br><br>

                    <!-- <button type="submit">Submit</button> -->
                 </div>

                </div>
            </form>
    </div>
    </div>
</body>
</html>