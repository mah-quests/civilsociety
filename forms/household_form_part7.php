<fieldset>
        <div class="row">
            <br>

            <div class="form-group col-md-12" align="center">
              <h5>Agents Remarks and Comments</h5>
            </div>


            <div class="col-md-12">
              <label for="comments"><br>Comments, Motivation & Observations</label>
                <textarea class="form-control" id="comments"  name="comments" rows="5" value="<?php echo $edit ? $user_id['comments'] : ''; ?>"  placeholder="Please enter your comments about the site visit" required>
                </textarea>
            </div>

    </div>
</fieldset>