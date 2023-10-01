/* eslint-disable */
/**
 * JQuery плагин-обёртка для создания другого Jquery плагина с именем pluginName, который в свою очередь является
 * proxy для объекта wrappedObject
 *
 * Плагин сделан для того, чтобы не дублировать интерфейс взаимодействия с объектом wrappedObject в каждом создаваемом плагине
 *
 * @author Egor Serikov
 */
;(function ( $, window, undefined ) {

    var curPluginName = 'pluginInit';

    /**
     *
     * @param pluginName Имя создаваемого плагина
     * @param wrappedObject Объект, к которому будет являться proxy создаваемый плагин
     * @returns {Array}
     */
    $.fn[curPluginName] = function ( pluginName, wrappedObject ) {

        // Проверка корректности аргумента
        if (!pluginName || $.trim(pluginName) == '')
        {
            throw new Error(curPluginName + ': empty plugin name');
        }

        if (typeof wrappedObject != 'function')
        {
            throw new Error(curPluginName + ': Incorrect wrappedObject for plugin ' + pluginName);
        }

        // Создаём плагин
        $.fn[pluginName] = function () {

            var pluginArgs = arguments,
                method = pluginArgs[0], // Метод, вызываемый для плагина
                res = [], // Результат вызова метода
                isMultiSelector = (this.length > 1); // Был ли плагин применён к нескольким селекторам

            // Проходимся по переданным селекторам
            this.each(function () {

                // Если объект для даннного селектора не был создан, создаём его с переданным аргументом
                var obj = (!$(this).data('plugin_' + pluginName)) ? $(this).data('plugin_' + pluginName, new wrappedObject( this, method )) : $(this).data('plugin_' + pluginName);

                // Если запрошен метод объекта
                if (typeof method != 'object' && method)
                {
                    // Если метод у объекта существует
                    if (typeof obj[method] == 'function')
                    {
                        // Вызываем метод
                        var curRes = obj[ method ].apply( obj, Array.prototype.slice.call( pluginArgs, 1 ));
                        // Если метод вернул результат
                        if (typeof curRes != 'undefined')
                        {
                            // Если плагин применён к нескольким селекторам, добавляем результат текущего метода в общий массив результата res
                            // Если плагин применён к 1 селектору, общим результатом вызова является текущий результат метода
                            (isMultiSelector) ? res.push(curRes) : res = curRes;
                        }
                    }
                    // Если метод у объекта отсутствует
                    else
                    {
                        console.log( 'Метод с именем ' +  method + ' не существует для '+ pluginName);
                    }
                }
            });

            // Возвращаем сформированный результат
            return res;
        }

    }
}(jQuery, window));

(function ($)
{
    var VoteCustom = function (container, options)
    {
        this.container = $(container);
        this.options = $.extend({}, defaults, options);
        this.loading = false;
        this.init();
    };

    VoteCustom.prototype = {
        init: function () {
            console.log('init vote plugin');
            var self = this,
                c = this.container;
            this.showResults();
            this.initBinds();
        },

        initBinds: function () {
            var self = this;
            self.container.on('click', 'button.vote', function (e) {
                e.preventDefault();
                var itemContainer = $(this).closest('.competition-item');
                self.sendVote(
                    itemContainer.data('id'),
                    itemContainer.find('.vote__counter')
                );
            });
        },

        showResults: function () {
            var self = this;
            $.ajax({
                url: self.options['resultsUrl'],
                method: 'post',
                success: function (response) {
                    if (response) {
                        self.container.find('.competition-item').each(function () {
                            var curId = $(this).data('id'),
                                curVoteNum = 0;
                            if (curId in Object(response)) {
                                curVoteNum = response[curId];
                            }
                            $(this).find('.vote__counter').html(curVoteNum);
                        });
                    }
                }
            });
        },

        sendVote: function (entityId, counterBlock) {
            if (this.loading) {
                return;
            }
            var self = this;
            $.ajax({
                url: self.options['voteUrl'],
                method: 'post',
                data:  {
                    entity_id: entityId
                },
                beforeSend: function () {
                    self.loading = true;
                },
                success: function (response) {
                    self.loading = false;
					// console.log(Object(response)['result']);
                    // if (response['result'] === 'ok') {
					if (response) {
						let num = isNaN(+counterBlock.html()) ? 0 : +counterBlock.html();
                        counterBlock.html(num + 1);
					}
                    // } else {
                    //     alert('Произошла ошибка. Повторите попытку позднее или свяжитесь с нами');
                    // }
                },
                complete: function () {
                    self.loading = false;
                }
            });
        }
    };

    var pluginName = 'voteCustom',
        defaults = {
            voteUrl: '/vote',
            resultsUrl: '/vote_list'
        };

    $.fn.pluginInit(pluginName, VoteCustom);

})(jQuery);
