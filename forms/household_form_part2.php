<fieldset>
        <div class="row">
            <br>

            <div class="form-group col-md-12" align="center">
              <h5>Household composition</h5>
            </div>


            <div class="col-md-6">
              <label for="settlement">Type of Settlement</label>
                <div style="width:98%">
                <select name="settlement" size="1" id="settlement" class="form-control unit" value="<?php echo $edit ? $user_id['settlement'] : ''; ?>" required>
                    <option selected>Informal Settlement</option>
                    <option>RDP</option>
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
                    <option selected>0</option>
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
              <label for="house-composition"><br>Household Sex Composition:<br></label>
            </div>


            <div class="col-md-2">
              <label for="males_in_house"># Male</label>
                <div style="width:98%">
                <select name="males_in_house" size="1" id="males_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['males_in_house'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-2">
              <label for="females_in_house"># Female</label>
                <div style="width:98%">
                <select name="females_in_house" size="1" id="females_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['females_in_house'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-2">
              <label for="gay_in_house"># Gay</label>
                <div style="width:98%">
                <select name="gay_in_house" size="1" id="gay_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['gay_in_house'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-2">
              <label for="lesbian_in_house"># Lesbian</label>
                <div style="width:98%">
                <select name="lesbian_in_house" size="1" id="lesbian_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['lesbian_in_house'] : ''; ?>" required>
                    <option selected>0</option>
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
              <label for="lgbt_in_house">#Other</label>
                <div style="width:98%">
                <select name="lgbt_in_house" size="1" id="lgbt_in_house" class="form-control unit" value="<?php echo $edit ? $user_id['lgbt_in_house'] : ''; ?>" required>
                    <option selected>0</option>
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
              <label for="house-composition"><br>Household Sexuality composition:<br></label>
            </div>


            <div class="col-md-3">
              <label for="num_hetero_sex"># Heterosexual (Straight)</label>
                <div style="width:98%">
                <select name="num_hetero_sex" size="1" id="num_hetero_sex" class="form-control unit" value="<?php echo $edit ? $user_id['num_hetero_sex'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-3">
              <label for="num_homo_sex"># Homosexual (Gay or Lesbian)</label>
                <div style="width:98%">
                <select name="num_homo_sex" size="1" id="num_homo_sex" class="form-control unit" value="<?php echo $edit ? $user_id['num_homo_sex'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-3">
              <label for="num_bi_sex"># Bisexual</label>
                <div style="width:98%">
                <select name="num_bi_sex" size="1" id="num_bi_sex" class="form-control unit" value="<?php echo $edit ? $user_id['num_bi_sex'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-3">
              <label for="num_other_sexuality"># Other</label>
                <div style="width:98%">
                <select name="num_other_sexuality" size="1" id="num_other_sexuality" class="form-control unit" value="<?php echo $edit ? $user_id['num_other_sexuality'] : ''; ?>" required>
                    <option selected>0</option>
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
              <label for="house-composition"><br>Household gender composition:<br></label>
            </div>


            <div class="col-md-2">
              <label for="num_cis_gender"># Cisgender</label>
                <div style="width:98%">
                <select name="num_cis_gender" size="1" id="num_cis_gender" class="form-control unit" value="<?php echo $edit ? $user_id['num_cis_gender'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-2">
              <label for="num_trans_gender"># Transgender</label>
                <div style="width:98%">
                <select name="num_trans_gender" size="1" id="num_trans_gender" class="form-control unit" value="<?php echo $edit ? $user_id['num_trans_gender'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-3">
              <label for="num_nonconfirm_gender"># Gender Nonconfirming</label>
                <div style="width:98%">
                <select name="num_nonconfirm_gender" size="1" id="num_nonconfirm_gender" class="form-control unit" value="<?php echo $edit ? $user_id['num_nonconfirm_gender'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-2">
              <label for="num_queer_gender"># Queer / Questioning</label>
                <div style="width:98%">
                <select name="num_queer_gender" size="1" id="num_queer_gender" class="form-control unit" value="<?php echo $edit ? $user_id['num_queer_gender'] : ''; ?>" required>
                    <option selected>0</option>
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


            <div class="col-md-3">
              <label for="num_other_gender"># Other: </label>
                <input class="form-control" type="text" name="num_other_gender" id="num_other_gender" placeholder="Enter your preferred gender" value="<?php echo $edit ? $user_id['num_other_gender'] : '';?>" > 
              </div>  


            <div class="col-md-12">
              <label for="house-composition"><br>Age grouping of the house occupants:<br></label>
            </div>


            <div class="col-md-4">
              <label for="age0_2">Ages between 0 and 13 years</label>
                <div style="width:98%">
                <select name="age0_2" size="1" id="age0_2" class="form-control unit" value="<?php echo $edit ? $user_id['age0_2'] : ''; ?>" required>
                    <option selected>0</option>
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
                    <option selected>0</option>
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
              <label for="age19_59">Ages between 19 and 35 years</label>
                <div style="width:98%">
                <select name="age19_59" size="1" id="age19_59" class="form-control unit" value="<?php echo $edit ? $user_id['age19_59'] : ''; ?>" required>
                    <option selected>0</option>
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
              <label for="age36_59">Ages between 36 and 59 years</label>
                <div style="width:98%">
                <select name="age36_59" size="1" id="age36_59" class="form-control unit" value="<?php echo $edit ? $user_id['age36_59'] : ''; ?>" required>
                    <option selected>0</option>
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
                    <option selected>0</option>
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