<fieldset>
        <div class="row">
            <br>

            <div class="form-group col-md-12" align="center">
              <h5>Household People Profile</h5>
            </div>


            <div class="col-md-6">
              <label for="settlement">Type of Settlement</label>
                <div style="width:98%">
                <select name="settlement" size="1" id="settlement" class="form-control unit" value="<?php echo $edit ? $user_id['settlement'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>Informal Settlement</option>
                    <option>Rural (Village)</option>
                    <option>Formal (Townhouse)</option>
                    <option>Formal (Background Dwellers)</option>
                    <option>Traditional </option>
                    <option>Farm Dwellers </option>
                    <option>Urban (Flats) </option>
                </select>
                </div>
            </div> 

            <div class="col-md-6">
              <label for="people_in_house">Number of people living in the house</label>
                <div style="width:98%">
                <select name="people_in_house" size="1" id="people_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['people_in_house'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option> 
                </select>
                </div>
            </div> 


            <div class="col-md-12">
              <label for="house-composition"><br>Composition of the house occupants:<br></label>
            </div>


            <div class="col-md-4">
              <label for="males_in_house"># of Male occupants</label>
                <div style="width:98%">
                <select name="males_in_house" size="1" id="males_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['males_in_house'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                </div>
            </div>


            <div class="col-md-4">
              <label for="females_in_house"># of Female occupants</label>
                <div style="width:98%">
                <select name="females_in_house" size="1" id="females_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['females_in_house'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                </div>
            </div>


            <div class="col-md-4">
              <label for="lgbt_in_house"># of Other occupants</label>
                <div style="width:98%">
                <select name="lgbt_in_house" size="1" id="lgbt_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['lgbt_in_house'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                </div>
            </div>


            <div class="col-md-12">
              <label for="house-composition"><br>Age grouping of the house occupants:<br></label>
            </div>


            <div class="col-md-4">
              <label for="age0_2">Ages between 0 and 13 years</label>
                <div style="width:98%">
                <select name="age0_2" size="1" id="age0_2" class="form-control unit" value="<?php echo $edit ? $user_id['age0_2'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                </div>
            </div>
            

            <div class="col-md-4">
              <label for="age13_18">Ages between 14 and 18 years</label>
                <div style="width:98%">
                <select name="age13_18" size="1" id="age13_18" class="form-control unit" value="<?php echo $edit ? $user_id['age13_18'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                </div>
            </div>


            <div class="col-md-4">
              <label for="age19_59">Ages between 19 and 59 years</label>
                <div style="width:98%">
                <select name="age19_59" size="1" id="age19_59" class="form-control unit" value="<?php echo $edit ? $user_id['age19_59'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                </div>
            </div>


            <div class="col-md-4">
              <label for="age60plus">Older than 60 years</label>
                <div style="width:98%">
                <select name="age60plus" size="1" id="age60plus" class="form-control unit" value="<?php echo $edit ? $user_id['age60plus'] : ''; ?>" required>
                    <option selected>Choose...</option>
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                </div>
            </div>
                     
    </div>
</fieldset>