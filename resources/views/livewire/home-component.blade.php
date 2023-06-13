<div>
    <form wire:submit.prevent="save">
        <!-- Section 1 -->
        @if ($currentStep == 1)
        <div class="form-group">
            <h1><strong>Welcome</strong> to digi-park</h1><br>
            <label for="counties">County: </label>
            <select name="county" id="counties" wire:model="county">
            <option class="option" value="county">Select County</option>
        <option class="option" value="Baringo">Baringo</option>
        <!-- <option value="none" selected disabled hidden>Select an Option</option> -->
        <option class="option"value="Bomet">Bomet</option>
        <option class="option"value="Bungoma">Bungoma</option>
        <option class="option"value="Busia">Busia</option>
        <option class="option"value="Elgeyo Marakwet">Elgeyo Marakwet</option>
        <option class="option"value="Embu">Embu</option>
        <option class="option"value="Garissa">Garissa</option>
        <option class="option"value="Homa Bay">Homa Bay</option>
        <option class="option"value="Isiolo">Isiolo</option>
        <option class="option"value="Kajiado">Kajiado</option>
        <option class="option"value="Kakamega">Kakamega</option>
        <option class="option"value="Kericho">Kericho</option>
        <option class="option"value="Kiambu">Kiambu</option>
        <option class="option"value="Kilifi">Kilifi</option>
        <option class="option"value="Kirinyaga">Kirinyaga</option>
        <option class="option"value="Kisii">Kisii</option>
        <option class="option"value="Kisumu">Kisumu</option>
        <option class="option"value="Kitui">Kitui</option>
        <option class="option"value="Kwale">Kwale</option>
        <option class="option"value="Laikipia">Laikipia</option>
        <option class="option"value="Lamu">Lamu</option>
        <option class="option"value="Machakos">Machakos</option>
        <option class="option"value="Makueni">Makueni</option>
        <option class="option"value="Mandera">Mandera</option>
        <option class="option"value="Meru">Meru</option>
        <option class="option"value="Migori">Migori</option>
        <option class="option"value="Marsabit">Marsabit</option>
        <option class="option"value="Mombasa">Mombasa</option>
        <option class="option"value="Murang'a">Murang'a</option>
        <option class="option"value="Nairobi">Nairobi</option>
        <option class="option"value="Nakuru">Nakuru</option>
        <option class="option"value="Nandi">Nandi</option>
        <option class="option"value="Narok">Narok</option>
        <option class="option"value="Nyamira">Nyamira</option>
        <option class="option"value="Nyandarua">Nyandarua</option>
        <option class="option"value="Nyeri">Nyeri</option>
        <option class="option"value="Samburu">Samburu</option>
        <option class="option"value="Siaya">Siaya</option>
        <option class="option"value="Taita Taveta ">Taita Taveta </option>
        <option class="option"value="Tana River ">Tana River </option>
        <option class="option"value="Tharaka Nithi">Tharaka Nithi</option>
        <option class="option"value="Trans Nzoia">Trans Nzoia</option>
        <option class="option"value="Turkana">Turkana</option>
        <option class="option"value="Uasin Gishu">Uasin Gishu</option>
        <option class="option"value="Vihiga">Vihiga</option>
        <option class="option"value="Wajir">Wajir</option>
        <option class="option"value="West Pokot">West Pokot</option>
            </select>
            <span class="text-danger">@error('county'){{ $message }}@enderror</span>
        </div>
        @endif

        <!-- Section 2 -->
        @if ($currentStep == 2)
        <div>
            <div class="form-group">
                <label for="make">MAKE:</label>
                <input type="text" id="make" name="make" wire:model="make">
                <span class="text-danger">@error('make'){{ $message }}@enderror</span>
            </div>

            <div class="form-group">
                <label for="model">MODEL:</label>
                <input type="text" id="model" name="model" wire:model="model">
                <span class="text-danger">@error('model'){{ $message }}@enderror</span>
            </div>

            <div class="form-group">
                <label for="plate">VEHICLE PLATE NUMBER:</label>
                <input type="text" id="plate" name="plate" maxlength="7" wire:model="vehicle_plate">
                <span class="text-danger">@error('vehicle_plate'){{ $message }}@enderror</span>
            </div>

            <div class="form-group other-color">
                <label for="other-color">COLOR:</label>
                <input type="text" id="other-color" name="other-color" wire:model="color">
                <span class="text-danger">@error('color'){{ $message }}@enderror</span>
            </div>

        </div>
        @endif

        <!-- Section 3 -->
        @if ($currentStep == 3)
            <div class="form-group">
                <label for="make">ENTER PHONE NUMBER:</label>
                <input type="text" id="make" name="make" wire:model="phone_number">
                <span class="text-danger">@error('phone_number'){{ $message }}@enderror</span>
            </div>
        @endif

        <!-- Confirm Section -->

        @if ($currentStep == 4)
            <div>
                <h1><strong>Please Confirm</strong></h1><br>
                <p>County: {{ $county }}</p>
                <p>Make: {{ $make }}</p>
                <p>Model: {{ $model }}</p>
                <p>Vehicle Plate Number: {{ $vehicle_plate }}</p>
                <p>Color: {{ $color }}</p>
                <p>Phone Number: {{ $phone_number }}</p>
            </div>            
        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

        @if ($currentStep == 1)
            <div></div>
        @endif
            
        @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
        <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep">Back</button>
        
        @endif    
        
        @if ($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
        <button type="button" class="btn btn-md btn-success" wire:click="increaseStep">Next</button>
        @endif
        
        @if ($currentStep == 4)
        <button type="submit" class="btn btn-md btn-primary" wire:click="save">Confirm</button>
        @endif
                
            
        </div>
    
</form> 
</div>