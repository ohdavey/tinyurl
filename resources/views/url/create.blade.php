<tinyurl inline-template>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group" :class="{'has-error': errors.has('url') }">
                <div class="input-group">

                    <input type="text" name="url" v-validate="'required|url'" class="form-control" placeholder="Enter your original URL..."/>
                    <span class="input-group-btn">
                        <button class="btn btn-default" @click="create">Go!</button>
                    </span>

                </div><!-- /input-group -->
                <p id="error-msg" v-show="errors.has('url')" class="help text-danger">@{{ errors.first('url') }}</p>
            </div>
        </div>
    </div>
</tinyurl>
