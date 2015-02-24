<div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary ">
                    <div class="panel-heading">Admin: Update data</div>
                    <div class="panel-body">
                        <form novalidate="novalidate" method="POST" id="new_user_basic"  class="simple_form new_user_basic" action="" accept-charset="UTF-8">

                            

                            <div class="form-group email required user_basic_email">
                                <label for="user_basic_email" class="email required control-label">
                                    Blinking text</label>
                                <div>
                                    <input type="text" value="<?php echo $file_data_array[0] ?>" placeholder="Enter blinking text" name="user_basic[marquee]" id="user_basic_email" class="string email required form-control">          
                                </div>
                            </div>



                            <div class="bs-docs-example">
                                <div id="accordion2" class="accordion">
                                    
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseSix" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                Update Desktop dialer links
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                                            <div class="accordion-inner">



                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Itel  [OC: 31719]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[1] ?>" placeholder="Enter Itel Dialer [OC 31719 ] link" name="user_basic[desktop_1]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        MoSIP [OC 1050]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[2] ?>" placeholder="Enter MoSIP [OC 1050 ] link" name="user_basic[desktop_2]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>
                                                

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseOne" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle collapsed">
                                                Update NOKIA dialer links
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                                            <div class="accordion-inner">
                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        HelloByte [OC 30020 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[3] ?>" placeholder="Enter HelloByte [OC 30020 ] link" name="user_basic[nokia_1]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>
                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Itel Dialer [OC 31719 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[4] ?>" placeholder="Enter Itel Dialer [OC 31719 ] link" name="user_basic[nokia_2]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>
                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        MoSIP [OC 1050]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[5] ?>" placeholder="Enter MoSIP [OC 1050] link" name="user_basic[nokia_3]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>
                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Gplex [OC 1015]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[6] ?>" placeholder="Enter Gplex [OC 1015] link" name="user_basic[nokia_4]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseTwo" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                Update ANDROID dialer links
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="collapseTwo" style="height: auto;">
                                            <div class="accordion-inner">

                                                <span class="dialer-sub-item-title">Android [Google Play Store]</span><hr>


                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        HelloByte [OC 30020 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[7] ?>" placeholder="Enter HelloByte [OC 30020 ] link" name="user_basic[android_1]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>
                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Itel Dialer [OC 31719 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[8] ?>" placeholder="Enter Itel Dialer [OC 31719 ] link" name="user_basic[android_2]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>

                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        MoSIP Platinum [OC 1050]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[9] ?>" placeholder="Enter MoSIP Platinum [OC 1050] link" name="user_basic[android_3]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>

                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Gplex [OC 1015]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[10] ?>" placeholder="Enter Gplex [OC 1015] link" name="user_basic[android_4]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>


                                                <span class="dialer-sub-item-title">Android [Direct Download]</span><hr>

                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        HelloByte [OC 30020 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[11] ?>" placeholder="Enter HelloByte [OC 30020 ] link" name="user_basic[android_5]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>
                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Itel Dialer [OC 31719 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[12] ?>" placeholder="Enter Itel Dialer [OC 31719 ] link" name="user_basic[android_6]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>

                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        MoSIP Platinum [OC 1050]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[13] ?>" placeholder="Enter MoSIP Platinum [OC 1050] link" name="user_basic[android_7]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>

                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Gplex [OC 1015]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[14] ?>" placeholder="Enter Gplex [OC 1015] link" name="user_basic[android_8]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseThree" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                Update IPHONE dialer links
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                                            <div class="accordion-inner">



                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Itel Dialer [OC 31719 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[15] ?>" placeholder="Enter Itel Dialer [OC 31719 ] link" name="user_basic[iphone_1]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseFour" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                Update BLACKBERRY dialer links
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
                                            <div class="accordion-inner">



                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Itel Dialer [OC 31719 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[16] ?>" placeholder="Enter Itel Dialer [OC 31719 ] link" name="user_basic[black_1]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a href="#collapseFive" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                                Update WINDOWS dialer links
                                            </a>
                                        </div>
                                        <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                                            <div class="accordion-inner">



                                                <div class="form-group email required user_basic_email">
                                                    <label for="user_basic_email" class="email required control-label">
                                                        Itel Dialer [OC 31719 ]</label>
                                                    <div>
                                                        <input type="text" value="<?php echo $file_data_array[17] ?>" placeholder="Enter Itel Dialer [OC 31719 ] link" name="user_basic[win_1]" id="user_basic_email" class="string email required form-control">          
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <input type="submit" value="Submit" name="submit" class="btn btn-default">
                        </form>
                    </div>
                </div>
            </div>
        </div>