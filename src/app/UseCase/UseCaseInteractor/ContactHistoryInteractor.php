<?php
namespace App\UseCase\UseCaseInteractor;
require_once __DIR__ . '/../../../vendor/autoload.php';
use App\Adapter\QueryServise\ContactQueryServise;
use App\UseCase\UseCaseInput\ContactHistoryInput;
use App\UseCase\UseCaseOutput\ContactHistoryOutput;

/**
 * お問い合わせ内容の全件表示のユースケース
 */
final class ContactHistoryInteractor
{
    /**
     * @var ContactQueryServise
     * @var ContactHistoryInput
     */
    private $contactQueryServise;
    private $contactHistoryInput;

    /**
     * コンストラクタ
     */
    public function __construct(ContactHistoryInput $contactHistoryInput)
    {
        $this->contactQueryServise = new ContactQueryServise();
        $this->contactHistoryInput = $contactHistoryInput;
    }

    /**
     * お問い合わせ内容の全件表示処理
     *
     * @return ContactHistoryOutput
     */
    public function handler(): ContactHistoryOutput
    {
        if ($this->hasSearchWord($this->contactHistoryInput)) {
            $contacts = $this->contactQueryServise->createContactsDataBySearchWord(
                $this->contactHistoryInput
            );
            $contactHistoryOutput = new ContactHistoryOutput($contacts);
            return $contactHistoryOutput;
        }
        $contacts = $this->contactQueryServise->createAllContactsData();
        $contactHistoryOutput = new ContactHistoryOutput($contacts);
        return $contactHistoryOutput;
    }

    private function hasSearchWord($contactHistoryInput): bool
    {
        return $contactHistoryInput->handler()->hasSearchWord();
    }
}
