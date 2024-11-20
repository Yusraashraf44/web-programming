function validateForm() {
            const firstname = document.getElementById("firstname").value.trim();
            const lastname = document.getElementById("lastname").value.trim();
            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();
            const confirmPassword = document.getElementById("confirmPassword").value.trim();
            const gender = document.getElementById("gender").value;
            const mobile = document.getElementById("mobile").value.trim();
            const address = document.getElementById("address").value.trim();
            const email = document.getElementById("email").value.trim();
 
            if (!firstname || !lastname || !username || !password || !confirmPassword || !gender || !mobile || !address || !email) {
                alert("All fields are required!");
                return false;
            }
 
            if (password !== confirmPassword) {
                alert("Passwords do not match!");
                return false;
            }
 
            if (!/^\d{10}$/.test(mobile)) {
                alert("Enter a valid 10-digit mobile number!");
                return false;
            }
 
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                alert("Enter a valid email!");
                return false;
            }
 
            alert("Registration Successful!");
            return true;
        }
   