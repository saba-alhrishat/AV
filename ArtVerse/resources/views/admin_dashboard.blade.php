



@extends('welcome')

@section('title','admin_dashboard')
@section('content')



<div class="dashboard">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h2>ArtVerse Admin</h2>
            </div>
            <div class="sidebar-menu">
                <div class="menu-item active">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-paint-brush"></i>
                    <span>Artworks</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-users"></i>
                    <span>Artists</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-user"></i>
                    <span>Users</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-chart-bar"></i>
                    <span>Analytics</span>
                </div>
                <div class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Dashboard Overview</h1>
                <div class="user-profile">
                    <span>Admin User</span>
                    <i class="fas fa-user-circle fa-2x"></i>
                </div>
            </div>
            
            <div class="stats-cards">
                <div class="stat-card">
                    <h3>Total Sales</h3>
                    <div class="value">$24,580</div>
                </div>
                <div class="stat-card">
                    <h3>New Orders</h3>
                    <div class="value">48</div>
                </div>
                <div class="stat-card">
                    <h3>Artworks</h3>
                    <div class="value">156</div>
                </div>
                <div class="stat-card">
                    <h3>Artists</h3>
                    <div class="value">32</div>
                </div>
            </div>
            
            <div class="recent-orders">
                <h2>Recent Orders</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer</th>
                            <th>Artwork</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#ORD-1001</td>
                            <td>John Doe</td>
                            <td>Starry Night</td>
                            <td>$2,500</td>
                            <td><span class="status completed">Completed</span></td>
                            <td><button>View</button></td>
                        </tr>
                        <tr>
                            <td>#ORD-1002</td>
                            <td>Jane Smith</td>
                            <td>Mona Lisa</td>
                            <td>$8,600</td>
                            <td><span class="status pending">Pending</span></td>
                            <td><button>View</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="top-artists">
                <h2>Top Artists</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Artist</th>
                            <th>Artworks</th>
                            <th>Total Sales</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Vincent van Gogh</td>
                            <td>12</td>
                            <td>$15,200</td>
                            <td>4.9 ★</td>
                        </tr>
                        <tr>
                            <td>Leonardo da Vinci</td>
                            <td>8</td>
                            <td>$12,500</td>
                            <td>4.8 ★</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @endsection