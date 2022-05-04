<?php
namespace App\UseCase\UseCaseOutput;
require_once __DIR__ . '/../../../vendor/autoload.php';

/**
 * お問い合わせ履歴の全件表示のコントローラ
 */
final class ContactHistoryOutput
{
    /**
     * @var Contact[]
     */
    private $contacts;

    /**
     * コンストラクタ
     */
    public function __construct(array $contacts)
    {
        $this->contacts = $contacts;
    }

    /**
     * 全件取得したデータをreturnで返す
     *
     * @return Contact[]
     */
    public function handler(): array
    {
        return $this->contacts;
    }
}
