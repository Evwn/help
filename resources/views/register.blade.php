<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register form</title>
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link href="css/style1.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <header>Signup Form for Voluntee</header>
      <div class="progress-bar">
        <div class="step">
          <p>Name</p>
          <div class="bullet">
            <span>1</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Contact</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Birth</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
        <div class="step">
          <p>Submit</p>
          <div class="bullet">
            <span>4</span>
          </div>
          <div class="check fas fa-check"></div>
        </div>
      </div>
      <div class="form-outer">
        <form method="post" action="{{route('save')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
          @csrf
          <div class="page slide-page">
            <div class="title">Basic Info:</div>
            <div class="field">
              <div class="label">First Name</div>
              <input type="text" name="firstname" placeholder="First Name">
            </div>
            <div class="field">
              <div class="label">Last Name</div>
              <input type="text" name="lastname" placeholder="Last Name">
            </div>
            <div class="field">
              <button class="firstNext next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Contact Info:</div>
            <div class="field">
              <div class="label">Email Address</div>
              <input type="text" name="email" placeholder="Email">
            </div>
            <div class="field">
              <div class="label">Phone Number</div>
              <input type="number" name="number" placeholder="Phone Number">
            </div>
            <div class="field btns">
              <button class="prev-1 prev">Previous</button>
              <button class="next-1 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Date of Birth:</div>
            <div class="field">
              <div class="label">Date</div>
              <input type="text" name="dob" placeholder="Date of Birth">
            </div>
            <div class="field">
              <div class="label">Gender</div>
              <select name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="field btns">
              <button class="prev-2 prev">Previous</button>
              <button class="next-2 next">Next</button>
            </div>
          </div>

          <div class="page">
            <div class="title">Login Details:</div>
            <div class="field">
              <div class="label">Username</div>
              <input type="text" name="username" placeholder="Username">
            </div>
            <div class="field">
              <div class="label">Password</div>
              <input type="password" name="password" placeholder="Password">
            </div>
            <div class="field btns">
              <button class="prev-3 prev">Previous</button>
              <button class="submit" type="submit">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="js/script.js"></script>

  </body>
</html>
