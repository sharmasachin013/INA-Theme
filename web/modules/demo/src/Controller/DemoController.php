<?php

namespace Drupal\demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Url;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

/**
 * Returns responses for Demo routes.
 */
final class DemoController extends ControllerBase
{
    /**
     * Builds the response.
     */
    public function __invoke(): array
    {
        $build["content"] = [
            "#type" => "item",
            "#markup" => $this->t("It works!"),
        ];

        return $build;
    }
    public function test($alias): array
    {
        //   dump($alias);

        $build["content"] = [
            "#type" => "item",
            "#markup" => $this->t("Test!!"),
        ];

        return $build;
    }

    public function accessTest()
    {
        $userRoles = \Drupal::service("current_user")->getRoles();
        $alias_manager = \Drupal::service("path_alias.manager");
        $alias = 'testcustom';

        // Step 1: Convert alias to internal path.
        $internal_path = $alias_manager->getPathByAlias("/" . $alias);
        if (preg_match('/^\/node\/(\d+)$/', $internal_path, $matches)) {
            $nid = (int) $matches[1]; // 27
            $node = Node::load($nid);
            if ($nid > 0) {
                if (in_array("seller", $userRoles)) {
                    return $this->redirectByAlias("/sellerpage");
                } else {
                    return $this->redirectByAlias("/sellererror");
                }
            }
        }

        $build["content"] = [
            "#type" => "item",
            "#markup" => $this->t("accessTest!!!!!!"),
        ];

        return $build;
    }

    public function redirectByAlias($alias): RedirectResponse
    {
        // Get the internal path
        $internal_path = \Drupal::service("path_alias.manager")->getPathByAlias(
            $alias
        );

        // Check if the internal path points to a node
        if (preg_match('/^\/node\/(\d+)$/', $internal_path, $matches)) {
            $nid = (int) $matches[1];
            $url = Url::fromRoute("entity.node.canonical", ["node" => $nid]);
            return new RedirectResponse($url->toString());
        }

        // Redirect to front page if alias doesn't match a node
        return new RedirectResponse(Url::fromRoute("<front>")->toString());
    }
}
