<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mls_id');
            $table->integer('mls_class_id')->nullable()->default(0);
            $table->string('mls_no', 100)->nullable();
            $table->string('mls_original_no', 100)->nullable();
            $table->string('unit_number', 200)->nullable();
            $table->string('living_area', 200)->nullable();
            $table->string('street_number', 100)->nullable();
            $table->string('street_direction', 100)->nullable();
            $table->string('street_suffix', 100)->nullable();
            $table->string('street_name', 200)->nullable();
            $table->string('city_id', 100);
            $table->string('state_id', 100)->nullable();
            $table->string('pincode', 100)->nullable();
            $table->string('address', 500)->nullable();
            $table->string('price', 100)->nullable();
            $table->string('bath', 100)->nullable();
            $table->integer('year_built')->nullable();
            $table->string('dom', 100)->nullable();
            $table->date('dom_date')->nullable();
            $table->string('mls_type', 100)->nullable();
            $table->string('property_type', 200)->nullable();
            $table->integer('is_sale')->nullable();
            $table->string('lease_rate_max', 50)->nullable();
            $table->string('lease_rate_min', 50)->nullable();
            $table->string('county', 100)->nullable();
            $table->string('agent_email', 100)->nullable();
            $table->string('agent_name', 100)->nullable();
            $table->string('floor_space', 100)->nullable();
            $table->string('balconies_space', 100)->nullable();
            $table->string('neighborhood_id', 100)->nullable();
            $table->string('number_of_balconies', 100)->nullable();
            $table->string('number_of_bedrooms', 100)->nullable();
            $table->string('number_of_garages', 100)->nullable();
            $table->string('number_of_parking_spaces', 100)->nullable();
            $table->string('pets_allowed', 100)->nullable();
            $table->text('description', 65535)->nullable();
            $table->string('public_remarks', 1000)->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('latlong_id')->nullable();
            $table->integer('building_id')->nullable();
            $table->dateTime('modified_time')->nullable();
            $table->timestamps();
            $table->integer('isindex')->default(0);
            $table->integer('pool')->nullable()->default(0);
            $table->integer('number_of_fireplaces')->nullable()->default(0);
            $table->integer('senior_community')->nullable()->default(0);
            $table->integer('school_details_id')->nullable()->default(0);
            $table->integer('subdivision_details_id')->nullable()->default(0);
            $table->integer('hoa_association')->nullable()->default(0);
            $table->integer('hoa_association_fee')->nullable()->default(0);
            $table->string('hoa_association_fee_type', 100)->nullable();
            $table->string('lot_sqft', 100)->nullable();
            $table->integer('listings_status_id')->nullable()->default(0);
            $table->integer('listings_type_id')->nullable()->default(0);
            $table->integer('number_of_photos')->nullable()->default(0);
            $table->string('ceiling_height', 100)->nullable();
            $table->string('structure_sqft', 100)->nullable();
            $table->string('office_name', 100)->nullable();
            $table->integer('user_id')->nullable()->default(0);
            $table->string('virtual_link', 300)->nullable();
            $table->string('3d_link', 300)->nullable();
            $table->string('tax_id', 100)->nullable();
            $table->string('taxes', 100)->nullable();
            $table->string('lot_size', 200)->nullable();
            $table->string('mls_area', 200)->nullable();
            $table->string('elementary_school_name')->nullable();
            $table->string('middle_school_name')->nullable();
            $table->string('middle_school_district')->nullable();
            $table->string('high_school_name')->nullable();
            $table->string('high_school_district')->nullable();
            $table->integer('property_labels_id')->nullable();
            $table->string('bath_half', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}
