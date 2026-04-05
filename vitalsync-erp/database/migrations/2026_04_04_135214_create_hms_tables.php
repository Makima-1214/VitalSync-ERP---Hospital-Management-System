<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Roles Table
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50)->unique();
            $table->timestamps();
        });

        // Update Users Table
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->nullable()->after('email')->constrained('roles')->onDelete('set null');
            $table->string('full_name')->nullable()->after('name');
        });

        // Patients Table
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique();
            $table->string('medical_record_number', 20)->unique();
            $table->string('name');
            $table->date('date_of_birth');
            $table->enum('gender', ['male', 'female']);
            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('blood_type', 5)->nullable();
            $table->text('allergies')->nullable();
            $table->timestamps();
        });

        // Queues Table
        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
            $table->string('queue_number', 10);
            $table->enum('status', ['waiting', 'calling', 'finished', 'cancelled'])->default('waiting');
            $table->timestamps();
        });

        // Medical Records Table
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade');
            $table->text('subjective')->nullable();
            $table->text('objective')->nullable();
            $table->text('assessment')->nullable();
            $table->text('plan')->nullable();
            $table->string('icd10_code', 10)->nullable();
            $table->json('vitals')->nullable();
            $table->timestamps();
        });

        // Medicines Table
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('code', 20)->unique();
            $table->string('name');
            $table->string('category', 50)->nullable();
            $table->integer('stock')->default(0);
            $table->decimal('price', 15, 2);
            $table->integer('critical_limit')->default(10);
            $table->timestamps();
        });

        // Prescriptions Table
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medical_record_id')->constrained()->onDelete('cascade');
            $table->json('medicine_details');
            $table->enum('status', ['pending', 'prepared', 'dispensed'])->default('pending');
            $table->timestamps();
        });

        // Rooms Table
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name', 50);
            $table->enum('class', ['VIP', '1', '2', '3']);
            $table->timestamps();
        });

        // Beds Table
        Schema::create('beds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->string('bed_number', 10);
            $table->enum('status', ['available', 'occupied', 'cleaning'])->default('available');
            $table->decimal('daily_rate', 15, 2);
            $table->timestamps();
        });

        // Lab Orders Table
        Schema::create('lab_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('medical_record_id')->constrained()->onDelete('cascade');
            $table->string('test_name');
            $table->string('result_file_path')->nullable();
            $table->text('result_text')->nullable();
            $table->enum('status', ['pending', 'completed'])->default('pending');
            $table->decimal('cost', 15, 2);
            $table->timestamps();
        });

        // Invoices Table
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number', 20)->unique();
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->foreignId('medical_record_id')->nullable()->constrained()->onDelete('set null');
            $table->decimal('total_amount', 15, 2)->default(0);
            $table->enum('status', ['unpaid', 'paid', 'cancelled'])->default('unpaid');
            $table->timestamp('paid_at')->nullable();
            $table->timestamps();
        });

        // Audit Logs Table
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('action');
            $table->string('table_name', 50);
            $table->json('old_values')->nullable();
            $table->json('new_values')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('lab_orders');
        Schema::dropIfExists('beds');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('prescriptions');
        Schema::dropIfExists('medicines');
        Schema::dropIfExists('medical_records');
        Schema::dropIfExists('queues');
        Schema::dropIfExists('patients');
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn(['role_id', 'full_name']);
        });
        
        Schema::dropIfExists('roles');
    }
};
