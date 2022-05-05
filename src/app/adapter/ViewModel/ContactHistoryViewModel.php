<?php
namespace App\Adapter\ViewModel;
use App\UseCase\UseCaseOutput\ContactHistoryOutput;

/**
 * ユーザー情報を表示させる
 */
final class ContactHistoryViewModel
{
    /**
     * @var ContactHistoryOutput
     */
    private $contactHistoryOutput;

    /**
     * コンストラクタ
     */
    public function __construct(contactHistoryOutput $contactHistoryOutput)
    {
        $this->contactHistoryOutput = $contactHistoryOutput;
    }

    /**
     * 取得したデータを履歴ページに出力する
     *
     * @return array
     */
    public function convertToWebView(): array
    {
        $contactEntityList = $this->contactHistoryOutput->handler();
        $contactHistoryForWeb = [];
        foreach ($contactEntityList as $contactEntity) {
            $contactHistoryForWeb[]['id'] = $contactEntity->id()->value();
            $contactHistoryForWeb[]['title'] = $contactEntity->title()->value();
            $contactHistoryForWeb[]['email'] = $contactEntity->email()->value();
            $contactHistoryForWeb[]['content'] = $contactEntity->content();
        }
        return $contactHistoryForWeb;
    }
}
