


@extends('welcome')

@section('title','user_dashboard')
@section('content')


<div class="user-dashboard">
        <!-- User Sidebar -->
        <div class="user-sidebar">
            <div class="user-profile-info">
                <img src="../img/user-avatar.jpg" alt="User Avatar" class="user-avatar">
                <h3>John Doe</h3>
                <p>Member since 2023</p>
            </div>
            <div class="user-menu">
                <div class="user-menu-item active">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </div>
                <div class="user-menu-item">
                    <i class="fas fa-user"></i>
                    <span>Profile</span>
                </div>
                <div class="user-menu-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span>My Orders</span>
                </div>
                <div class="user-menu-item">
                    <i class="fas fa-heart"></i>
                    <span>Favorites</span>
                </div>
                <div class="user-menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </div>
                <div class="user-menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                   <a href="home.html" style="color: white !important; text-decoration: none;">Logout</a>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="user-main-content">
            <div class="user-header">
                <div class="welcome-message">
                    <h1>Welcome back, John!</h1>
                    <p>Here's what's happening with your account today.</p>
                </div>
            </div>
            
            <div class="user-stats">
                <div class="user-stat-card">
                    <h3>Total Orders</h3>
                    <div class="value">8</div>
                </div>
                <div class="user-stat-card">
                    <h3>Favorites</h3>
                    <div class="value">12</div>
                </div>
                <div class="user-stat-card">
                    <h3>Wallet Balance</h3>
                    <div class="value">$1,250</div>
                </div>
            </div>
            
            <div class="user-orders">
                <h2>Recent Orders</h2>
                <div class="order-item">
                    <img src="../img/gimg/g1.jpg" alt="Order" class="order-image">
                    <div class="order-details">
                        <h4>Mona Lisa</h4>
                        <p>Order #ORD-1001 • $8,600</p>
                    </div>
                    <span class="order-status status-completed">Completed</span>
                </div>
                <div class="order-item">
                    <img src="../img/gimg/g5.jpg" alt="Order" class="order-image">
                    <div class="order-details">
                        <h4>Starry Night</h4>
                        <p>Order #ORD-1002 • $2,500</p>
                    </div>
                    <span class="order-status status-pending">Pending</span>
                </div>
            </div>
            
            <div class="user-favorites">
                <h2>Favorite Artworks</h2>
                <div class="favorite-item">
                    <img src="../img/gimg/g3.jpg" alt="Favorite" class="favorite-image">
                    <div class="favorite-details">
                        <h4>The Kiss</h4>
                        <p>By Gustav Klimt • $2,400</p>
                    </div>
                    <button>View</button>
                </div>
                <div class="favorite-item">
                    <img src="../img/oimg/o1.jpg" alt="Favorite" class="favorite-image">
                    <div class="favorite-details">
                        <h4>The Persistence of Memory</h4>
                        <p>By Salvador Dalí • $1,500</p>
                    </div>
                    <button>View</button>
                </div>
            </div>
        </div>
    </div>

    @endsection