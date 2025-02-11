<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Permissions for different modules
        $permissions = [
            // Product Management
            'view_products',
            'create_products',
            'edit_products',
            'delete_products',
            
            // Order Management
            'view_orders',
            'process_orders',
            'cancel_orders',
            'update_order_status',
            
            // Vendor Management
            'manage_vendors',
            'approve_vendors',
            'view_vendor_reports',
            
            // User Management
            'manage_users',
            'view_users',
            
            // Financial Management
            'manage_payments',
            'view_transactions',
            'process_refunds',
            'manage_commissions',
            
            // Marketing
            'manage_promotions',
            'manage_campaigns',
            'manage_discounts',
            
            // Delivery Management
            'manage_deliveries',
            'assign_delivery',
            'update_delivery_status',
            
            // Report & Analytics
            'view_reports',
            'export_reports',
            
            // Settings
            'manage_settings',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Create Roles and Assign Permissions
        
        // 1. Admin (Super Admin)
        $adminRole = Role::create(['name' => 'admin']);
        
        $adminRole->givePermissionTo(Permission::all());

        // 2. Moderator
        $moderatorRole = Role::create(['name' => 'moderator']);
        $moderatorRole->givePermissionTo([
            'view_products', 'edit_products',
            'view_orders', 'process_orders', 'update_order_status',
            'view_users', 'view_vendor_reports',
            'view_transactions', 'view_reports'
        ]);

        // 3. Vendor
        $vendorRole = Role::create(['name' => 'vendor']);
        $vendorRole->givePermissionTo([
            'view_products', 'create_products', 'edit_products',
            'view_orders', 'update_order_status',
            'view_transactions', 'view_reports'
        ]);

        // 4. Vendor Manager
        $vManagerRole = Role::create(['name' => 'v_manager']);
        $vManagerRole->givePermissionTo([
            'manage_vendors', 'approve_vendors',
            'view_vendor_reports', 'view_reports',
            'manage_commissions'
        ]);

        // 5. Officer
        $officerRole = Role::create(['name' => 'officer']);
        $officerRole->givePermissionTo([
            'view_products', 'view_orders',
            'view_users', 'view_reports'
        ]);

        // 6. Marketing Manager
        $marketingRole = Role::create(['name' => 'marketing_manager']);
        $marketingRole->givePermissionTo([
            'manage_promotions', 'manage_campaigns',
            'manage_discounts', 'view_reports'
        ]);

        // 7. Accountant
        $accountantRole = Role::create(['name' => 'accountant']);
        $accountantRole->givePermissionTo([
            'manage_payments', 'view_transactions',
            'process_refunds', 'manage_commissions',
            'view_reports', 'export_reports'
        ]);

        // 8. Delivery
        $deliveryRole = Role::create(['name' => 'delivery']);
        $deliveryRole->givePermissionTo([
            'manage_deliveries', 'update_delivery_status'
        ]);

        // 9. Regular User/Customer
        $userRole = Role::create(['name' => 'user']);
        // Regular users typically don't need special permissions as their
        // access is controlled through regular authentication middleware
    }
}