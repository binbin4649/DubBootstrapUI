<?php

namespace DubBootstrapUI\View\Helper;

use Cake\View\Helper;
use BcCustomContent\Service\CustomContentsServiceInterface;
use BcCustomContent\Service\CustomEntriesServiceInterface;
use BaserCore\Utility\BcContainerTrait;
use BcCustomContent\Model\Entity\CustomEntry;

class DubHelper extends Helper
{
    use BcContainerTrait;

    protected CustomEntriesServiceInterface $entriesService;

    protected array $helpers = [
        'BaserCore.BcBaser',
        'BcBlog.Blog'
    ];

    public function initialize(array $config): void
    {
        parent::initialize($config);
    }

    // @param int $custom_table_id
    public function getCustomTable(int $custom_table_id)
    {
        $this->entriesService = $this->getService(CustomEntriesServiceInterface::class);
        $this->entriesService->setup($custom_table_id);
        $params = [
            // 'contain' => ['CustomTables' => ['CustomContents' => ['Contents']]],
            'order' => 'id',
            'direction' => 'ASC'
        ];
        return $this->entriesService->getIndex($params)->toArray();
    }

    /**
     * カスタムエントリーの一覧を取得する
     *
     * @param entity or int $customContent
     * @param int $num
     * @param array $options
     * @return mixed
     *
     * $customContent = カスタムコンテンツの実体id
     * $entries = $this->Dub->getCustomEntries(3, 100);
     */
    public function getCustomEntries($customContent, int $num = 5, array $options = [])
    {
        // $customContentが entityId だった場合
        if (is_integer($customContent)) {
            $customContent = $this->getService(CustomContentsServiceInterface::class)->get($customContent, [
                // 'status' => 'publish'
            ]);
        }
        $this->entriesService = $this->getService(CustomEntriesServiceInterface::class);
        $this->entriesService->setup($customContent->custom_table_id);
        $params = array_merge([
            'contain' => ['CustomTables' => ['CustomContents' => ['Contents']]],
            'status' => 'publish',
            'order' => $customContent->list_order,
            'direction' => $customContent->list_direction,
            'limit' => $num
        ], $options);
        return $this->entriesService->getIndex($params)->toArray();
    }

    // custom_content file(img)にパスを付けてimgタグを返す
    // @oaram CustomEntry $entry
    // @param array $options
    public function customImg(CustomEntry $entry, array $options = [])
    {
        if (empty($entry->img)) {
            return '';
        }
        $path = '/files/bc_custom_content/' . $entry->custom_table_id . '/custom_entries/' . $entry->img;
        $params = array_merge([
            'alt' => $entry->title
        ], $options);
        return $this->BcBaser->img($path, $params);
    }
}
