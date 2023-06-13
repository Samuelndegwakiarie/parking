<div>
    <form>
        <div class="form-group">
            <label for="make">MAKE:</label>
            <input type="text" id="make" name="make">
        </div>
        
        <div class="form-group">
            <label for="model">MODEL:</label>
            <input type="text" id="model" name="model">
        </div>

        <div class="form-group">
            <label for="plate">VEHICLE PLATE NUMBER:</label>
            <input type="text" id="plate" name="plate" maxlength="7">
            </div>
        
        
        <div class="form-group other-color">
            <label for="other-color">COLOR:</label>
            <input type="text" id="other-color" name="other-color">
        </div>

        <div class="form-group">
          <label for="make">ENTER PHONE NUMBER:</label>
          <input type="text" id="make" name="make">
        </div>
        
        <div class="form-group">
        <input type="submit" value="PAY" >
        </div>
    </form>
        
    <script>
    document.querySelector("#color").addEventListener("change", function() {
        if (this.value === "other") {
        document.querySelector(".other-color").style.display = "block";
        } else {
        document.querySelector(".other-color").style.display = "none";
        }
    });
    </script>
    
</div>
