   <!-- Navigation Bar -->
   <header>
        <div class="logo">
            <img src="../img/boma.png" alt="Logo">

            <h1>ArtVerse</h1>
        </div>
        
         <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/aboutus">About</a></li>
                <li><a href="/gallary">Gallary</a></li>
                <li><a href="/artists">Artists</a></li>
                <li><a href="/contactus">Contact Us</a></li>
                <li>
                    <select onchange="window.location.href=this.value"
                    style="   
                    border: 2px #ff6b6b solid;
                    background-color: black;
                    color: white;
                    padding: 6px 10px;
                    border-radius: 5px ;
                    margin-left: 10px;
                    font-weight: bold;
                    "
                    
                    
                    >


                        <option selected disabled >More Pages</option >
                        <option value="/cart">Cart</option>
                        <option value="/checkout" >Checkout</option>
                        <option value="/user_dashboard">My Account</option>
                        <option value="/testimonial" >Testimonial</option>
                        <option value="/products" >products</option>
                        
                    </select>
                </li>
            </ul>
        </nav>
        

        <div class="auth">
            <a href="/login" class="btn">Login</a>
            <a href="/signup" class="btn btn-primary">Sign Up</a>
        </div>
    
    </header>