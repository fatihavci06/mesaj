
                        <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Kullanıcı Adı</th>
                                        <th>Mesaj</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $message)
                                    <tr>
                                        <td>{{$message->senderinfo->name}}</td>
                                        <td>{{$message->content}}</td>
                                        
                                    </tr>

                                   @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Kullanıcı Adı</th>
                                        <th>Mesaj</th>
                                        
                                    </tr>
                                </tfoot>
                            </table>