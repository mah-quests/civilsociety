<script type="text/javascript">
    function showHideAgeInfo(){
        var noAge0_2 = document.getElementById("age0_2").value;
        var noAge13_18 = document.getElementById("age13_18").value;
        if( noAge0_2 > 0 || noAge13_18 > 0){
            jQuery('#schooldetails-info').show();
            document.getElementById("schooldetails-info").style.visibility = 'visible';
        }else{
            jQuery('#schooldetails-info').hide();
            document.getElementById("schooldetails-info").style.visibility = 'hidden';            
        }
    }
</script>

<div class="row">
    <fieldset>
            <br>

            <div class="form-group col-md-12" align="center">
              <h5><br>Household composition</h5>
            </div>


            <div class="col-md-6">
              <label for="settlement">Type of Settlement (*)</label>
                <div style="width:100%">
                <select name="settlement" size="1" id="settlement" class="form-control unit" required>
                    <option selected value=""></option>
                    <option>Informal Settlement</option>
                    <option>RDP</option>
                    <option>Rural (Village)</option>
                    <option>Formal (Townhouse)</option>
                    <option>Formal (Background Dwellers)</option>
                    <option>Traditional </option>
                    <option>Farm Dwellers </option>
                    <option>Urban (Flats) </option>
                    <option>Hostel </option>
                </select>
                </div>
            </div> 

            <div class="col-md-6">
              <label for="people_in_house">Number of people living in the house </label>
                <div style="width:100%">
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
              <label for="house-composition"><br>Household Sex Composition:<br><br></label>
            </div>


            <div class="col-md-3">
              <label for="num_homo_sex">
                # Intersex 
              </label>
                <div style="width:100%">
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
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>                     
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="females_in_house"># Female</label>
                <div style="width:100%">
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
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>                     
                </select>
                </div>
            </div>


            <div class="col-md-3">
              <label for="males_in_house"># Male</label>
                <div style="width:100%">
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
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>                     
                </select>
                </div>
            </div>


            <div class="col-md-3">
              <label for="lgbt_in_house">#Other</label>
                <div style="width:100%">
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
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>                     
                </select>
                </div>
            </div>


            <div class="col-md-12">
              <label for="house-composition"><br><br>Household Sexuality composition:<br><br></label>
            </div>


            <div class="col-md-2">
              <label for="num_bi_sex"># Bisexual</label>
                <div style="width:100%">
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
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>                     
                </select>
                </div>
            </div>            


            <div class="col-md-2">
              <label for="gay_in_house"># Gay</label>
                <div style="width:100%">
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
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>                     
                </select>
                </div>
            </div>


            <div class="col-md-2">
              <label for="num_hetero_sex"># Heterosexual <i style="font-size: 12px">(Straight)</i></label>
                <div style="width:100%">
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
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>                     
                </select>
                </div>
            </div> 


            <div class="col-md-3">
              <label for="lesbian_in_house"># Lesbian</label>
                <div style="width:100%">
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
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>                     
                </select>
                </div>
            </div>            



            <div class="col-md-3">
              <label for="num_other_sexuality"># Other</label>
                <div style="width:100%">
                <select name="num_other_sexuality" size="1" id="num_other_sexuality" class="form-control unit" value="<?php echo $edit ? $user_id['num_other_sexuality'] : ''; ?>" >
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
              <label for="house-composition"><br><br>Household gender composition:<br><br></label>
            </div>


            <div class="col-md-2">
              <label for="num_cis_gender">
                # Cisgender <br>
                    <i style="font-size: 12px">(Man or Woman)
                    </i>
              </label>
                <div style="width:100%">
                <select name="num_cis_gender" size="1" id="num_cis_gender" class="form-control unit" value="<?php echo $edit ? $user_id['num_cis_gender'] : ''; ?>" >
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


            <div class="col-md-3">
              <label for="num_nonconfirm_gender"># Gender Nonconfirming/<br> Non-Binary</label>
                <div style="width:100%">
                <select name="num_nonconfirm_gender" size="1" id="num_nonconfirm_gender" class="form-control unit" value="<?php echo $edit ? $user_id['num_nonconfirm_gender'] : ''; ?>" >
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



            <div class="col-md-2">
              <label for="num_trans_gender"><br># Transgender</label>
                <div style="width:100%">
                <select name="num_trans_gender" size="1" id="num_trans_gender" class="form-control unit" value="<?php echo $edit ? $user_id['num_trans_gender'] : ''; ?>" >
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


            <div class="col-md-2">
              <label for="num_queer_gender"><br># Queer / Questioning</label>
                <div style="width:100%">
                <select name="num_queer_gender" size="1" id="num_queer_gender" class="form-control unit" value="<?php echo $edit ? $user_id['num_queer_gender'] : ''; ?>" >
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


            <div class="col-md-3">
              <label for="num_other_gender"><br># Other: </label>
                <input class="form-control" type="text" name="num_other_gender" id="num_other_gender" placeholder="Enter your preferred gender" value="0"> 
              </div>  


            <div class="col-md-12">
              <label for="house-composition"><br>Age grouping of the house occupants:<br><br></label>
            </div>


            <div class="col-md-2">
              <label for="age0_2">Ages between 0 and 13 years</label>
                <div style="width:100%">
                <select name="age0_2" size="1" id="age0_2" class="form-control unit" onchange="showHideAgeInfo(this.value);" >
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
            

            <div class="col-md-2">
              <label for="age13_18">Ages between 14 and 18 years</label>
                <div style="width:100%">
                <select name="age13_18" size="1" id="age13_18" class="form-control unit" onchange="showHideAgeInfo(this.value);" >
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


            <div class="col-md-2">
              <label for="age19_59">Ages between 19 and 35 years</label>
                <div style="width:100%">
                <select name="age19_59" size="1" id="age19_59" class="form-control unit" value="<?php echo $edit ? $user_id['age19_59'] : ''; ?>" >
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


            <div class="col-md-2">
              <label for="age36_59">Ages between 36 and 59 years</label>
                <div style="width:100%">
                <select name="age36_59" size="1" id="age36_59" class="form-control unit" value="<?php echo $edit ? $user_id['age36_59'] : ''; ?>" >
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

            <div class="col-md-4">
              <label for="age60plus"><br>Older than 60 years</label>
                <div style="width:100%">
                <select name="age60plus" size="1" id="age60plus" class="form-control unit" >
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
    </fieldset>
                     
<fieldset id="schooldetails-info" style="display:none">

            <div class="col-md-12">
              <label for="house-composition"><br>How many people in the household are studying: <br><br></label>
            </div>

            <div class="col-md-3">
              <label for="pre_r"># Pre Grade-R</label>
                <div style="width:100%">
                <select name="pre_r" size="1" id="pre_r" class="form-control unit" >
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
              <label for="grade_r"># Grade R</label>
                <div style="width:100%">
                <select name="grade_r" size="1" id="grade_r" class="form-control unit" >
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
              <label for="grade1_7"># Grade 1 - 7</label>
                <div style="width:100%">
                <select name="grade1_7" size="1" id="grade1_7" class="form-control unit" >
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
              <label for="grade8_9"># Grade 8 - 9</label>
                <div style="width:100%">
                <select name="grade8_9" size="1" id="grade8_9" class="form-control unit" >
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
              <label for="grade10_12"># Grade 10 - 12</label>
                <div style="width:100%">
                <select name="grade10_12" size="1" id="grade10_12" class="form-control unit" >
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
              <label for="tertiary"># Tertiary </label>
                <div style="width:100%">
                <select name="tertiary" size="1" id="tertiary" class="form-control unit" >
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
                                               

    </fieldset>
</div>