<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-3" style="background-color: #fff; padding: 10px;">
            <div class="panel panel-default">

                <div class="panel-heading" data-toggle="collapse" data-target="#userListBody" style="cursor: pointer;">

                    <span class="fa fa-bars"></span>

                    <span>
                        <i class="fa fa-users"></i> Чаты
                    </span>
                </div>

            </div>
            <div class="panel-body collapse in" id="userListBody">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr ng-repeat="chat in getChatList()">
                            <td><i class="fa fa-user"></i> @{{ chat.author.name }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-8">
            <div class="chat-panel panel panel-primary">
                <div class="chat-empty text-center" style="font-size: 30px; color: #BDBDBD;" ng-if="isLoading">
                    <p>
                        <i class="fa fa-circle-o-notch fa-spin"></i>
                    </p>
                    <p> Ожидайте загрузки...</p>
                </div>
                <div class="chat-empty text-center" style="font-size: 30px; color: #BDBDBD;" ng-if="!isLoading && getChatMessages() == 0">
                    <p>
                        <i class="fa fa-flag"></i>
                    </p>
                    <p> Нет сообщений</p>
                </div>
                <div class="chat-body" ng-if="getChatMessages() > 0">
                    <div class="panel-heading">
                        <span class="fa fa-comment"></span> Chat

                    </div>
                    <div class="panel-body chat-panel-body">
                        <ul class="chat">
                            <li ng-class="{'left': !isAuthor(message), 'right': isAuthor(message)}" class="clearfix"
                                ng-repeat="messages in getChatMessages()">
                        <span ng-class="{'pull-left': isRecipient(message), 'pull-right': !isAuthor(message)}"
                              class="chat-img">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle"/>
                        </span>
                                <div class="chat-body clearfix">
                                    <div class="header">
                                        <strong class="primary-font">@{{ message.author.name }}</strong>
                                        <small class="pull-right text-muted">
                                            <span class="fa fa-clock-o"></span>@{{ message.date_send }}
                                        </small>
                                    </div>
                                    <p>
                                        @{{ message.message }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm"
                                   placeholder="Введите ваше сообщение..."/>
                            <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                <i class="fa fa-send"></i> Отправить</button>
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>

</div>